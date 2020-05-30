<?php

namespace App\Services;

use App\Tools\DomCrawlerTool;

class WarmoService
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
        $request = CurlService::request("https://www.wartabromo.com/post-sitemap24.xml");
        $parseRequest = simplexml_load_string($request);

        $index = 0;
        $sitemaps = [];
        foreach ($parseRequest as $parsed) {
            $sitemaps[] = [
                'link' => (string) $parsed->loc,
                'published_at' => strtotime($parsed->lastmod)
            ];
            $index += 1;
            if ($index >= 10) {
                break;
            }
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

            $contents = $result->find('div.td-post-content > p');

            $post_content = '';
            foreach ($contents as $content) {
                $post_content .= $content;
            }

            PostService::create([
                'title' => $result->find('h1.entry-title', 0)->plaintext,
                'content' => $post_content,
                'image' => $result->find('img.entry-thumb.td-modal-image', 0)->src,
                'link' => $sitemap['link'],
                'author' => 'warta bromo',
                'published_at' => $sitemap['published_at']
            ]);
        }

        return true;
    }
}
