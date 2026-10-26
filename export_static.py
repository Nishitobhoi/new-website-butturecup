#!/usr/bin/env python3
import os
import re
import subprocess

DIR = os.path.dirname(os.path.abspath(__file__))

PAGES_TO_EXPORT = [
    ('home.php', 'index.html'),
    ('home.php', 'home.html'),
    ('aboutus.php', 'aboutus.html'),
    ('services.php', 'services.html'),
    ('projects.php', 'projects.html'),
    ('contactus.php', 'contactus.html'),
    ('packagingdesignportfolio.php', 'packagingdesignportfolio.html'),
    ('logodesignportfolio.php', 'logodesignportfolio.html'),
    ('brochuredesignportfolio.php', 'brochuredesignportfolio.html'),
    ('branding-portfolio.php', 'branding-portfolio.html'),
    ('websitedesignportfolio.php', 'websitedesignportfolio.html'),
    ('advertising-design-portfolio.php', 'advertising-design-portfolio.html'),
    ('vijay-trivedi-branding.php', 'vijay-trivedi-branding.html'),
    ('ecoforest-branding.php', 'ecoforest-branding.html'),
    ('farmbyte-branding.php', 'farmbyte-branding.html'),
    ('gabbar-branding.php', 'gabbar-branding.html'),
    ('jimmy-branding.php', 'jimmy-branding.html'),
    ('prajay-steel-branding.php', 'prajay-steel-branding.html'),
    ('brand-strategy-consulting-agency.php', 'brand-strategy-consulting-agency.html'),
    ('branding-agency-ahmedabad.php', 'branding-agency-ahmedabad.html'),
    ('brand-naming-agency-india.php', 'brand-naming-agency-india.html'),
    ('digital-marketing.php', 'digital-marketing.html'),
    ('graphic-design-company-india.php', 'graphic-design-company-india.html'),
    ('logo-design-agency-india.php', 'logo-design-agency-india.html'),
    ('packaging-design-company-ahmedabad.php', 'packaging-design-company-ahmedabad.html'),
    ('brochure-design-company-india.php', 'brochure-design-company-india.html'),
    ('exhibitionstalldesignindia.php', 'exhibitionstalldesignindia.html'),
    ('webdesignservicesindia.php', 'webdesignservicesindia.html'),
    ('printmediaadvertisementindia.php', 'printmediaadvertisementindia.html'),
    ('animated-motion-graphics-video-agency.php', 'animated-motion-graphics-video-agency.html'),
    ('socialmediaportfolio.php', 'socialmediaportfolio.html'),
    ('outdoorcampaignportfolio.php', 'outdoorcampaignportfolio.html'),
    ('printmedia-portfolio.php', 'printmedia-portfolio.html'),
    ('career.php', 'career.html'),
    ('sitemap.php', 'sitemap.html'),
    ('privacy.php', 'privacy.html'),
    ('terms.php', 'terms.html'),
    ('casestudy.php', 'casestudy.html'),
    ('blog.php', 'blog.html'),
    ('blog-detail.php', 'blog-detail.html'),
    ('thanks.php', 'thanks.html')
]

# Alias map for links
LINK_REWRITES = {
    'index.php': 'index.html',
    'home.php': 'index.html',
    'contact.php': 'contactus.html',
    'contactus.php': 'contactus.html',
    'branding.php': 'branding-portfolio.html',
    'brandingportfolio.php': 'branding-portfolio.html',
    'broucher-design.php': 'brochuredesignportfolio.html',
    'brochure-design-portfolio.php': 'brochuredesignportfolio.html',
    'packaging-design-portfolio.php': 'packagingdesignportfolio.html',
    'packaging-design.php': 'packagingdesignportfolio.html',
    'logo-design-portfolio.php': 'logodesignportfolio.html',
    'logo-design.php': 'logodesignportfolio.html',
    'website-design-portfolio.php': 'websitedesignportfolio.html',
    'website-design.php': 'websitedesignportfolio.html',
    'social-media-portfolio.php': 'socialmediaportfolio.html',
    'outdoor-campaign-portfolio.php': 'outdoorcampaignportfolio.html',
    'strategy.php': 'brand-strategy-consulting-agency.html',
    'printmedia.php': 'printmediaadvertisementindia.html',
    'motion-videos.php': 'animated-motion-graphics-video-agency.html',
    'exhibition-design.php': 'exhibitionstalldesignindia.html',
    'graphic-design.php': 'graphic-design-company-india.html',
    'casestudy-detail.php': 'projects.html',
    'liquidmeal-portfolio.php': 'socialmediaportfolio.html',
    'quike-portfolio.php': 'socialmediaportfolio.html',
    'save-management-portfolio.php': 'socialmediaportfolio.html',
    'start51-portfolio.php': 'socialmediaportfolio.html',
    'vijay-trivedi-portfolio.php': 'vijay-trivedi-branding.html',
}

def sanitize_html(html, current_page):
    # 1. Fix root-relative asset paths
    html = re.sub(r'href=([\'"])/css/style\.css\1', r'href=\1css/style.css\1', html)
    html = re.sub(r'href=([\'"])/css/stylehome\.css\1', r'href=\1css/stylehome.css\1', html)
    html = re.sub(r'href=([\'"])/css/full-menu\.css\1', r'href=\1css/full-menu.css\1', html)
    html = re.sub(r'href=([\'"])full-menu\.css\1', r'href=\1css/full-menu.css\1', html)
    html = re.sub(r'href=([\'"])/images/', r'href=\1images/', html)
    html = re.sub(r'src=([\'"])/images/', r'src=\1images/', html)
    html = re.sub(r'href=([\'"])/icofont/', r'href=\1icofont/', html)
    html = re.sub(r'src=([\'"])/js/', r'src=\1js/', html)
    html = re.sub(r'href=([\'"])/fonts/', r'href=\1fonts/', html)
    
    # Fontawesome
    html = re.sub(r'href=([\'"])fontawesome-free-5\.0\.7/css/fontawesome-all\.css\1', 
                  r'href=\1icofont/fontawesome-free-5.0.7/css/fontawesome-all.css\1', html)
    
    # Ensure icofont.min.css is loaded
    if 'icofont.min.css' not in html and '</head>' in html:
        html = html.replace('</head>', '\t<link rel="stylesheet" type="text/css" href="icofont/icofont.min.css">\n</head>')
        
    # Mixed content http -> https
    html = html.replace('http://cdnjs.cloudflare.com/', 'https://cdnjs.cloudflare.com/')
    html = html.replace('http://www.google.com/recaptcha/', 'https://www.google.com/recaptcha/')
    
    # 2. Navigation & internal links
    # Root links
    html = re.sub(r'href=([\'"])/(?:index\.php)?\1', r'href=\1index.html\1', html)
    html = re.sub(r'href=([\'"])https?://(?:www\.)?buttercup\.in/?(?:index\.php)?\1', r'href=\1index.html\1', html)
    
    # Case study / blog aliases
    html = re.sub(r'href=([\'"])/(?:case-study|case-studies|casestudies)/?\1', r'href=\1projects.html\1', html)
    html = re.sub(r'href=([\'"])(?:case-study|case-studies|casestudies)/?\1', r'href=\1projects.html\1', html)
    html = re.sub(r'href=([\'"])/(?:blog)/?\1', r'href=\1blog.html\1', html)
    
    # Case study single post links (like /case_studies/... or /casestudies/...) -> link to projects.html
    html = re.sub(r'href=([\'"])/(?:case_studies|casestudies)/[^"\']*\1', r'href=\1projects.html\1', html)
    html = re.sub(r'href=([\'"])(?:case_studies|casestudies)/[^"\']*\1', r'href=\1projects.html\1', html)
    html = re.sub(r'href=([\'"])case-studies/page/[^"\']*\1', r'href=\1projects.html\1', html)
    html = re.sub(r'href=([\'"])(?:what-is-corporate-branding|core-branding-tips|importance-of-good-brochure|do-i-need-to-hire|the-10-commandments|three-reasons)[^"\']*\1', 
                  r'href=\1blog.html\1', html)
    html = re.sub(r'href=([\'"])/(?:core-branding-tips|importance-of-good-brochure|do-i-need-to-hire|the-10-commandments|three-reasons)[^"\']+\1', 
                  r'href=\1blog.html\1', html)

    # Specific rewrites
    for old_link, new_link in LINK_REWRITES.items():
        html = re.sub(r'href=([\'"])(?:https?://(?:www\.)?buttercup\.in/)?(?:/)?' + re.escape(old_link) + r'\1', 
                      r'href=\1' + new_link + r'\1', html)
                      
    # Generic .php rewrite for all exported pages
    for php_name, html_name in PAGES_TO_EXPORT:
        html = re.sub(r'href=([\'"])(?:https?://(?:www\.)?buttercup\.in/)?(?:/)?' + re.escape(php_name) + r'\1', 
                      r'href=\1' + html_name + r'\1', html)

    # If any remaining buttercup.in/page.php
    def replace_buttercup_url(m):
        path = m.group(1)
        if path.endswith('.php'):
            path = path[:-4] + '.html'
        return f'href="{path}"'
    html = re.sub(r'href=[\'"]https?://(?:www\.)?buttercup\.in/([^"\'#]+)[\'"]', replace_buttercup_url, html)

    return html

def main():
    print(f"Exporting static pages from {DIR}...")
    success_count = 0
    for php_file, html_file in PAGES_TO_EXPORT:
        php_path = os.path.join(DIR, php_file)
        html_path = os.path.join(DIR, html_file)
        if not os.path.exists(php_path):
            print(f"[SKIP] {php_file} not found")
            continue
            
        res = subprocess.run(
            ['php', '-d', 'display_errors=0', '-d', 'error_reporting=0', '-f', php_file],
            cwd=DIR, capture_output=True, text=True
        )
        raw_html = res.stdout.strip()
        if not raw_html:
            print(f"[ERR] {php_file} generated empty output")
            continue
            
        clean_html = sanitize_html(raw_html, html_file)
        with open(html_path, 'w', encoding='utf-8') as f:
            f.write(clean_html)
            
        print(f"[OK] {php_file} -> {html_file} ({len(clean_html):,} bytes)")
        success_count += 1
        
    print(f"\nDone! Exported {success_count} pages.")

if __name__ == '__main__':
    main()
