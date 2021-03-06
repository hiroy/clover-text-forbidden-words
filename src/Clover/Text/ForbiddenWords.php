<?php
namespace Clover\Text;

class ForbiddenWords
{
    protected static $words = [
        'about',
        'access',
        'admin',
        'android',
        'api',
        'apps',
        'atom',
        'blog',
        'career',
        'categories',
        'category',
        'clients',
        'communities',
        'community',
        'company',
        'contact',
        'contact-us',
        'contact_us',
        'contactus',
        'dashboard',
        'download',
        'edu',
        'education',
        'enterprise',
        'faq',
        'feature',
        'features',
        'feed',
        'feedback',
        'founder',
        'help',
        'home',
        'info',
        'information',
        'inquiry',
        'iphone',
        'job',
        'jobs',
        'language',
        'languages',
        'legal',
        'license',
        'link',
        'links',
        'linux',
        'log-in',
        'log-out',
        'log_in',
        'log_out',
        'login',
        'logout',
        'mac',
        'member',
        'members',
        'mobile',
        'news',
        'overview',
        'page',
        'pages',
        'payment',
        'plan',
        'policy',
        'press',
        'price',
        'pricing',
        'privacy',
        'privacy-policy',
        'privacy_policy',
        'privacypolicy',
        'rss',
        'search',
        'service',
        'services',
        'sign-in',
        'sign-up',
        'sign_in',
        'sign_up',
        'signin',
        'signup',
        'sitemap',
        'smartphone',
        'staff',
        'status',
        'support',
        'team',
        'teams',
        'terms',
        'terms-of-service',
        'terms_of_service',
        'termsofservice',
        'top',
        'tutorial',
        'usage',
        'user',
        'users',
        'welcome',
        'windows',
        'work',
        'works',
    ];

    public static function includes($name)
    {
        if (in_array($name, self::$words)) {
            return true;
        }
        return false;
    }

    public static function all()
    {
        return self::$words;
    }
}
