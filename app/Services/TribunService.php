<?php

namespace App\Services;

use App\Tools\DomCrawlerTool;

class TribunService
{
    /**
     * This method use as public accessible for api controller.
     *
     * @return void
     */
    public static function crawler()
    {
        return self::getContent(self::getSitemap());
    }

    /**
     * This method to get list of sitemap and parse them, also get the rest information to access
     * detail information.
     *
     * @return array
     */
    public static function getSitemap()
    {
        $request = CurlService::request("https://jatim.tribunnews.com/jatim/sitemap_news.xml");

        $dom = new DomCrawlerTool;
        $result = $dom->str_get_html($request);
        $locs = $result->find('loc');

        $sitemaps = [];
        foreach ($locs as $index => $loc) {
            if ($index >= 20) {
                break;
            }

            $explodePreLink = explode('<![CDATA[', $loc->plaintext);
            $explodePostLink = explode(']]>', $explodePreLink[1]);

            $explodePreTitle = explode('<![CDATA[', $result->find('news:title')[$index]->plaintext);
            $explodePostTitle = explode(']]>', $explodePreTitle[1]);

            $explodePublishedAt = explode('<![CDATA[', $result->find('news:publication_date')[$index]->plaintext);
            $explodePublishedAt = explode(']]>', $explodePublishedAt[1]);

            $sitemaps[] = [
                'link' => $explodePostLink[0],
                'title' => $explodePostTitle[0],
                'published_at' => strtotime($explodePublishedAt[0])
            ];
        }

        return $sitemaps;
    }

    /**
     * This method use to access detail page and get description of the post.
     *
     * @param  mixed $sitemaps
     * @return bool
     */
    public static function getContent($sitemaps = [])
    {
        foreach ($sitemaps as $sitemap) {
            $request = CurlService::request($sitemap['link']);
            $dom = new DomCrawlerTool;
            $result = $dom->str_get_html($request);

            $contents = $result->find('div.side-article.txt-article > p');

            $post_content = '';
            foreach ($contents as $content) {
                $post_content .= $content;
            }

            PostService::create([
                'title' => $sitemap['title'],
                'content' => $post_content,
                'image' => $result->find('img.imgfull', 0)->src,
                'link' => $sitemap['link'],
                'author' => 'tribun jatim',
                'published_at' => $sitemap['published_at']
            ]);
        }

        return true;
    }
}
