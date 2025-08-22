<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $blogs = [
            [
                'title' => 'Understanding GST: A Complete Guide for Indian Businesses',
                'slug' => 'understanding-gst-complete-guide-indian-businesses',
                'excerpt' => 'Learn everything about GST in India, from registration to filing returns. This comprehensive guide covers all aspects of GST for businesses.',
                'content' => '<p>Goods and Services Tax (GST) is a comprehensive indirect tax that has revolutionized the Indian taxation system. This guide will help you understand GST better.</p><h2>What is GST?</h2><p>GST is a destination-based tax levied on the supply of goods and services...</p>',
                'category' => 'GST',
                'tags' => 'GST, Indian Tax, Business Tax, GST Registration',
                'featured_image' => '/images/blog/gst-guide.jpg',
                'is_published' => true,
                'published_at' => now()->subDays(30),
                'created_at' => now()->subDays(30),
            ],
            [
                'title' => 'VAT Calculator Tips: Maximizing Your UK Business Tax Efficiency',
                'slug' => 'vat-calculator-tips-uk-business-tax-efficiency',
                'excerpt' => 'Discover how to use VAT calculators effectively to manage your UK business taxes. Learn about different VAT rates and schemes.',
                'content' => '<p>Value Added Tax (VAT) is a crucial consideration for UK businesses. Using the right tools and understanding VAT can save your business money.</p>',
                'category' => 'VAT',
                'tags' => 'VAT, UK Tax, VAT Calculator, Business Tips',
                'featured_image' => '/images/blog/vat-calculator.jpg',
                'is_published' => true,
                'published_at' => now()->subDays(25),
                'created_at' => now()->subDays(25),
            ],
            [
                'title' => 'GST vs VAT: Key Differences Explained',
                'slug' => 'gst-vs-vat-key-differences-explained',
                'excerpt' => 'Confused between GST and VAT? This article explains the fundamental differences between these two tax systems.',
                'content' => '<p>While both GST and VAT are consumption taxes, they have significant differences in their implementation and structure...</p>',
                'category' => 'Tax Comparison',
                'tags' => 'GST, VAT, Tax Comparison, International Tax',
                'featured_image' => '/images/blog/tax-comparison.jpg',
                'is_published' => true,
                'published_at' => now()->subDays(20),
                'created_at' => now()->subDays(20),
            ],
            [
                'title' => 'How to Calculate GST on Services: Step-by-Step Guide',
                'slug' => 'how-to-calculate-gst-on-services',
                'excerpt' => 'Learn how to calculate GST on various services with practical examples. Includes tips for using our GST calculator.',
                'content' => '<p>Calculating GST on services can be tricky. This guide breaks down the process with real-world examples...</p>',
                'category' => 'GST',
                'tags' => 'GST Calculator, Service Tax, GST Rates, Tutorial',
                'featured_image' => '/images/blog/gst-services.jpg',
                'is_published' => true,
                'published_at' => now()->subDays(15),
                'created_at' => now()->subDays(15),
            ],
            [
                'title' => 'UK VAT Rates 2024: Everything You Need to Know',
                'slug' => 'uk-vat-rates-2024-guide',
                'excerpt' => 'Stay updated with the latest UK VAT rates for 2024. Learn about standard, reduced, and zero rates.',
                'content' => '<p>Understanding UK VAT rates is essential for businesses. Here\'s a comprehensive guide to VAT rates in 2024...</p>',
                'category' => 'VAT',
                'tags' => 'VAT Rates, UK Tax 2024, VAT Guide',
                'featured_image' => '/images/blog/uk-tax.jpg',
                'is_published' => true,
                'published_at' => now()->subDays(10),
                'created_at' => now()->subDays(10),
            ],
            [
                'title' => 'Financial Planning for Small Businesses: Tax Optimization Strategies',
                'slug' => 'financial-planning-small-businesses-tax-optimization',
                'excerpt' => 'Effective financial planning can help small businesses optimize their tax liabilities. Learn proven strategies.',
                'content' => '<p>Small businesses can benefit significantly from proper financial planning and tax optimization...</p>',
                'category' => 'Financial Planning',
                'tags' => 'Financial Planning, Tax Optimization, Small Business',
                'featured_image' => '/images/blog/small-business.jpg',
                'is_published' => true,
                'published_at' => now()->subDays(5),
                'created_at' => now()->subDays(5),
            ],
            [
                'title' => 'E-Invoicing Under GST: Implementation Guide',
                'slug' => 'e-invoicing-under-gst-implementation-guide',
                'excerpt' => 'E-invoicing is mandatory for many businesses under GST. Learn how to implement it effectively.',
                'content' => '<p>The e-invoicing system under GST has streamlined invoice generation and validation...</p>',
                'category' => 'GST',
                'tags' => 'E-Invoicing, GST Compliance, Digital Tax',
                'featured_image' => '/images/blog/e-invoicing.jpg',
                'is_published' => true,
                'published_at' => now()->subDays(3),
                'created_at' => now()->subDays(3),
            ],
            [
                'title' => 'Common GST Mistakes and How to Avoid Them',
                'slug' => 'common-gst-mistakes-how-to-avoid',
                'excerpt' => 'Avoid costly GST compliance errors. Learn about common mistakes businesses make and how to prevent them.',
                'content' => '<p>GST compliance can be complex, and mistakes can be costly. Here are the most common errors...</p>',
                'category' => 'GST',
                'tags' => 'GST Mistakes, GST Compliance, Tax Tips',
                'featured_image' => '/images/blog/gst-compliance.jpg',
                'is_published' => true,
                'published_at' => now()->subDays(1),
                'created_at' => now()->subDays(1),
            ],
            [
                'title' => 'Using Financial Calculators for Better Business Decisions',
                'slug' => 'using-financial-calculators-business-decisions',
                'excerpt' => 'Learn how to leverage financial calculators for making informed business decisions.',
                'content' => '<p>Financial calculators are powerful tools that can help businesses make data-driven decisions...</p>',
                'category' => 'Tools',
                'tags' => 'Financial Calculators, Business Tools, Decision Making',
                'featured_image' => '/images/blog/financial-calculator.jpg',
                'is_published' => true,
                'published_at' => now(),
                'created_at' => now(),
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}