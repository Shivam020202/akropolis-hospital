# Content Writing & SEO Internal Linking Guide

This guide defines the standards for writing and publishing blog posts on the Akropolis Hospital website. Follow these rules for all future content additions (English and Hindi) to ensure consistency, clean SEO structure, and correct cross-language linking.

---

## 1. Internal Linking Constraints

To prevent search engines from flagging the content as spammy or over-linked, follow these strict limits:

*   **Maximum Link Count**: Keep a maximum of **4 to 5 internal links** per blog post content.
*   **English Anchor Text**: Anchor text for all internal links **must be in English**, even in Hindi blog posts. This improves indexing clarity for search engines.
*   **Target Service Pages**: Focus links exclusively on the main department, diagnostic, and specialty pages rather than linking to other blogs.
*   **Location-Based Keywords**: Use natural, search-friendly English anchor texts with location keywords (e.g. `best orthopedic hospital in Gurgaon`, `best spine surgery hospital in Gurgaon`, `best cardiologist in Gurgaon`) to rank for localized terms.

### Recommended Target Pages & English Anchors

| Target URL | Relevancy / Topic | Recommended English Anchor Text |
| :--- | :--- | :--- |
| `/orthopedics.php` | Knee pain, joint pain, fractures, joints | `best orthopedic hospital in Gurgaon`, `Orthopedics Department`, `Knee Replacement Surgery`, `Robotic Knee Surgery` |
| `/cardiology.php` | Heart attacks, chest pain, cardiology | `best cardiologist in Gurgaon`, `Cardiology Department`, `Heart Blockage Treatment` |
| `/neurology.php` | Spine pain, back pain, neck pain, numbness, paralysis, spine surgery | `best neurologist in Gurgaon`, `Neurology Department`, `best spine surgery hospital in Gurgaon`, `Spine Care and Neurology Center` |
| `/nephrology.php` | Kidney disease, dialysis, urinary tract | `Nephrology Department`, `Kidney Specialist in Gurgaon`, `Dialysis Center` |
| `/gastroenterology.php` | Gas, acidity, stomach pain, endoscopy | `Gastroenterology Department`, `Best Gastroenterologist in Gurgaon` |
| `/emergency.php` | Acute pain, accident, heart emergencies | `24/7 Emergency Care`, `Emergency Services` |
| `/ct-scan.php` | Scans, X-rays, MRI, diagnostics | `MRI and X-Ray Scan`, `CT Scan Services`, `Advanced Diagnostics` |
| `/contact.php` | Booking appointments, consultation | `Book Appointment Online`, `Contact Akropolis Hospital` |

---

## 2. Directory Structure & File Setup

The website uses a dynamic multi-language routing system. All blog posts are defined as array structures within PHP configuration files.

```
/blog
├── index.php                 <-- Language selector landing page
├── router.php                <-- Clean URL mapper/router
├── en/
│   ├── index.php             <-- English blog listing
│   └── posts/
│       └── blogs.php         <-- English Blog Posts Data File
└── hi/
    ├── index.php             <-- Hindi blog listing
    └── posts/
        └── blogs.php         <-- Hindi Blog Posts Data File
```

*   **Hindi Posts**: Write and place them inside [hi/posts/blogs.php](file:///Users/bp/Desktop/Akropolish%20/blog/hi/posts/blogs.php).
*   **English Posts**: Write and place them inside [en/posts/blogs.php](file:///Users/bp/Desktop/Akropolish%20/blog/en/posts/blogs.php).

---

## 3. Language Sync Rules (Automatic Switching)

The single-blog template renders posts dynamically and provides a language selector tab at the top of each page. For the language switcher to work correctly between English and Hindi versions:

1.  Both versions **must use the exact same slug** (e.g. `slug => 'early-signs-of-heart-disease'`).
2.  If the user is on the English post `/blog/en/early-signs-of-heart-disease.php`, the switcher will dynamically change the URL to `/blog/hi/early-signs-of-heart-disease.php`.
3.  Ensure the Hindi translation has the corresponding entry in `/blog/hi/posts/blogs.php` using the same slug `early-signs-of-heart-disease`.

---

## 4. Entry Code Format Example

When adding a new blog post at the **TOP** of the array in `blogs.php`, use this structure:

```php
    [
        'slug'         => 'early-signs-of-heart-disease',
        'title'        => 'घुटनों के दर्द के लिए डॉक्टर को कब दिखाना चाहिए?',
        'excerpt'      => 'घुटने का दर्द अक्सर उम्र बढ़ने का सामान्य हिस्सा लगता है...',
        'image'        => 'https://images.pexels.com/photos/7659564/pexels-photo-7659564.jpeg?auto=compress&cs=tinysrgb&w=800',
        'author'       => 'डॉ. अमित वर्मा',
        'category'     => 'हड्डी रोग',
        'tags'         => ['घुटने का दर्द', 'ऑर्थोपेडिक्स'],
        'read_time'    => '8 मिनट',
        'published_at' => '2026-06-01',
        'status'       => 'published',
        'faqs'         => [
            ['question' => 'घुटनों के दर्द के लिए डॉक्टर को कब दिखाना चाहिए?',
             'answer'   => 'अगर दर्द 2 हफ्ते से ज़्यादा रहे, तो <a href="/orthopedics">Orthopedics Department</a> से जांच कराएं।'],
        ],
        'content'      => '
<h2>शीर्षक</h2>
<p>घुटने का दर्द होने पर Akropolis Hospital - the <a href="/orthopedics">best orthopedic hospital in Gurgaon</a> में जांच कराएं।</p>
<p>जांच के लिए <a href="/ct-scan">MRI and X-Ray Scan</a> आवश्यक हो सकते हैं।</p>
<p>परामर्श हेतु आप <a href="/contact">Book Appointment Online</a> कर सकते हैं।</p>
',
    ],
```
