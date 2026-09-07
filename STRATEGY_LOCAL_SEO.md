# Local SEO Location Page Strategy - Akropolis Hospital

This document outlines the architecture and strategy for scaling district-specific landing pages for different medical specialties.

## 1. Directory Structure
Target a clean, folder-based URL structure for maximum SEO benefit:
`/[specialty]-hospital/[state]/[district-name]/index.php`

**Example:**
`https://akropolishospital.com/orthopedic-hospital/haryana/gurugram/`

## 2. Reusable Template System
Instead of duplicating code, use a "thin wrapper" approach:
- **Wrapper (`index.php`)**: Sets variables like `$district_name` and `$landmarks`.
- **Template (`components/specialty-district-template.php`)**: Contains the full UI logic and uses `dirname(__DIR__)` for root-safe includes.

## 3. SEO Content Strategy
- **Target Keyword**: `Best [Specialty] Hospital in [District Name]`
- **Local Context**: Include 2-3 specific landmarks/nearby areas in the content and Hero section.
- **Rich Schema**:
  - **FAQ Schema**: District-specific questions.
  - **Breadcrumb Schema**: Reflecting the location hierarchy.
- **Design Parity**: Landing pages must include all high-conversion sections from the homepage:
  - Hero with localized H1
  - Trust Signals (Awards/Accreditations)
  - About Akropolis
  - Department Grid
  - Expert Doctors Slider
  - Video Testimonials
  - Insurance Partners Scroll
  - Latest Blog Posts

## 4. Internal Linking (Upper Footer)
The main specialty page (e.g., `orthopedics.php`) should contain an "Upper Footer" section titled **"We are serving in these areas"**.
- List all district pages in a 3-column grid.
- Use rich anchor text: `Best [Specialty] Hospital in [District Name]`.

## 5. Automation Workflow
To create a new set of location pages:
1.  **Define Landmarks**: Create a mapping of districts to landmarks.
2.  **Generation Script**: Run a PHP script to:
    - Create district folders.
    - Create `index.php` wrappers in each folder.
3.  **Main Page Update**: Update the specialty's main page with the location grid.

## 6. Server Configuration
Use `.htaccess` to handle redirects and ensure parent directories (like `/orthopedic-hospital/haryana/`) redirect back to the main specialty page to prevent 404s.
