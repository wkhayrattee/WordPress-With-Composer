<!doctype html>
<title>Site Maintenance</title>

<style>
    body { text-align: center; padding: 20px; }
    @media (min-width: 768px){
        body{ padding-top: 150px; }
    }
    h1 { font-size: 50px; }
    body { font: 20px Helvetica, sans-serif; color: #333; }
    article { display: block; text-align: left; max-width: 650px; margin: 0 auto; }
    h1 { color: #99cc00; text-decoration: none; }
    a { color: #99cc00; text-decoration: underline; }
    a:hover { color: #fd9a9a; text-decoration: none; }
</style>

<body>
<article>
    <h1>{ Scheduled maintenace }</h1>
    <h3>We&rsquo;ll be back soon!</h3>
    <div>
        <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to, you can always <a href="mailto:<?php echo trim($_ENV['MAINTENANCE_MAILTO_EMAIL'])?>">contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>
        <p>&mdash; The Admin Team</p>
    </div>
</article>
</body>
</html>
