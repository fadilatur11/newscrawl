<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"> 
@foreach($sitemap as $value)
  <url>
    <loc>{{url('/detail/'.$value['id'].'/'.$value['slug'])}}</loc>
    <lastmod>{{ date('Y-m-d H:i:s', $value['published_at']) }}</lastmod>
  </url>
  @endforeach
</urlset>