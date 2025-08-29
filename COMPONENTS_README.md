# Laravel Blade Components Structure

This document describes the component-based architecture for the Ceylon 1850 Laravel project.

## Component Overview

The project has been restructured to use reusable Blade components located in `resources/views/components/`. This approach provides:

- **Reusability**: Components can be used across multiple pages
- **Maintainability**: Changes to components affect all pages using them
- **Consistency**: Ensures uniform appearance across the site
- **Flexibility**: Easy to customize per page

## Component List

### 1. `head.blade.php`
**Purpose**: HTML head section with meta tags and CSS files
**Customizable Variables**:
- `$pageTitle` - Page title (default: 'Elements')
- `$pageDescription` - Meta description
- `$customCSS` - Custom CSS file name
- `$pageType` - Page type for conditional CSS loading ('home', 'elements', 'contact', 'blog', 'packages')

**Usage**:
```blade
@include('components.head')
```

### 2. `header.blade.php`
**Purpose**: Header navigation, hamburger menu, and mobile menu
**Features**:
- Responsive navigation
- Mobile hamburger menu
- Laravel route integration
- Logo and CTA button

**Usage**:
```blade
@include('components.header')
```

### 3. `hero.blade.php`
**Purpose**: Hero section with parallax background
**Customizable Variables**:
- `$heroSubtitle` - Hero subtitle
- `$heroTitle` - Main hero title
- `$pageType` - Page type for conditional content ('home', 'elements', 'contact', 'blog', 'packages')
- `$heroDescription` - Hero description (for home page only)

**Usage**:
```blade
@include('components.hero')
```

### 4. `buttons.blade.php`
**Purpose**: Button showcase section
**Features**:
- Three button styles
- Links to contact page

**Usage**:
```blade
@include('components.buttons')
```

### 5. `accordions-tabs.blade.php`
**Purpose**: Accordion and tab components
**Features**:
- Three accordion items
- Three tab panels
- Responsive layout

**Usage**:
```blade
@include('components.accordions-tabs')
```

### 6. `loaders.blade.php`
**Purpose**: Progress bar components
**Features**:
- Four progress bars
- Different percentage values
- Customizable titles

**Usage**:
```blade
@include('components.loaders')
```

### 7. `milestones.blade.php`
**Purpose**: Counter/milestone section
**Features**:
- Four milestone counters
- Icon support
- Animated counting

**Usage**:
```blade
@include('components.milestones')
```

### 8. `icon-boxes.blade.php`
**Purpose**: Icon box components
**Features**:
- Three icon boxes
- Title and description
- Icon support

**Usage**:
```blade
@include('components.icon-boxes')
```

### 9. `reservations.blade.php`
**Purpose**: Reservation form section
**Features**:
- Laravel form validation
- CSRF protection
- Error handling
- Success messages
- Form persistence

**Usage**:
```blade
@include('components.reservations')
```

### 10. `footer.blade.php`
**Purpose**: Footer section
**Customizable Variables**:
- `$footerAbout` - Footer about text
- `$footerEmail` - Contact email

**Usage**:
```blade
@include('components.footer')
```

### 11. `scripts.blade.php`
**Purpose**: JavaScript files and custom scripts
**Customizable Variables**:
- `$customScript` - Custom JavaScript file name
- `$pageType` - Page type for conditional JavaScript loading ('home', 'elements', 'contact', 'blog', 'packages')

**Usage**:
```blade
@include('components.scripts')
```

### 12. `elements-content.blade.php`
**Purpose**: Main elements content wrapper
**Features**:
- Includes all UI element components
- Organized layout structure

**Usage**:
```blade
@include('components.elements-content')
```

## How to Use Components

### Basic Usage
```blade
@include('components.component-name')
```

### With Custom Data
```blade
@include('components.hero', [
    'heroSubtitle' => 'Custom Subtitle',
    'heroTitle' => 'Custom Title'
])
```

### In a Page Template
```blade
<!DOCTYPE html>
<html lang="en">
    @include('components.head')
<body>
    <div class="super_container">
        @include('components.header')
        @include('components.hero')
        @include('components.elements-content')
        @include('components.reservations')
        @include('components.footer')
    </div>
    @include('components.scripts')
</body>
</html>
```

## Controller Integration

### ElementsController
The `ElementsController` demonstrates how to pass data to components:

```php
public function index()
{
    $data = [
        'pageTitle' => 'Elements - Ceylon 1850',
        'heroSubtitle' => 'Ceylon 1850',
        'heroTitle' => 'Elements',
        'footerAbout' => 'Custom footer text...',
        'customCSS' => 'elements.css',
        'customScript' => 'elements.js'
    ];

    return view('elements', $data);
}
```

### ContactController
The `ContactController` handles the contact page:

```php
public function index()
{
    $data = [
        'pageTitle' => 'Contact - Ceylon 1850',
        'pageType' => 'contact',
        'heroSubtitle' => 'Ceylon 1850',
        'heroTitle' => 'Contact',
        'contactInfo' => 'Contact information text...',
        'contactAddress' => 'Address details...',
        'contactPhone' => '+94 76 424 6613',
        'contactEmail' => 'info@ceylon1850.com'
    ];

    return view('contact', $data);
}
```

### BlogController
The `BlogController` handles the blog page:

```php
public function index()
{
    $data = [
        'pageTitle' => 'Blog - Ceylon 1850',
        'pageType' => 'blog',
        'heroSubtitle' => 'Ceylon 1850',
        'heroTitle' => 'Our Blog',
        'loadMoreText' => 'Load More',
        'footerAbout' => 'Footer about text...',
        'footerEmail' => 'info@ceylon1850.com'
    ];

    return view('blog', $data);
}
```

### PackagesController
The `PackagesController` handles the packages page:

```php
public function index()
{
    $data = [
        'pageTitle' => 'Packages - Ceylon 1850',
        'pageType' => 'packages',
        'heroSubtitle' => 'Ceylon 1850',
        'heroTitle' => 'Packages',
        'sectionSubtitle' => 'Plan Your Visit',
        'sectionTitle' => 'Discover Our Packages',
        'packageText1' => 'Package description text...',
        'packageText2' => 'Additional package information...',
        'package1Title' => 'Village Explorer (Half-Day)',
        'package1Feature1' => 'Feature description...',
        // ... more features
        'footerAbout' => 'Footer about text...',
        'footerEmail' => 'info@ceylon1850.com'
    ];

    return view('packages', $data);
}
```

## Benefits of This Structure

1. **DRY Principle**: No code duplication across pages
2. **Easy Maintenance**: Update components once, affects all pages
3. **Consistent Design**: Uniform appearance across the site
4. **Flexible**: Easy to customize per page
5. **Scalable**: Add new components easily
6. **Laravel Native**: Uses Laravel's built-in component system

## Customization

### Adding New Components
1. Create new file in `resources/views/components/`
2. Use `@include('components.new-component')` in templates
3. Pass data via controller variables

### Modifying Existing Components
1. Edit the component file
2. Changes automatically apply to all pages using it
3. Use conditional logic for page-specific variations

### Page-Specific Customization
1. Pass different data from controller
2. Use conditional rendering in components
3. Override component variables per page

## File Structure
```
resources/views/
├── components/
│   ├── head.blade.php
│   ├── header.blade.php
│   ├── hero.blade.php
│   ├── buttons.blade.php
│   ├── accordions-tabs.blade.php
│   ├── loaders.blade.php
│   ├── milestones.blade.php
│   ├── icon-boxes.blade.php
│   ├── reservations.blade.php
│   ├── footer.blade.php
│   ├── scripts.blade.php
│   └── elements-content.blade.php
├── elements.blade.php
├── index.blade.php
├── contact.blade.php
├── blog.blade.php
└── packages.blade.php
```

This component structure makes the codebase more maintainable and follows Laravel best practices for view organization.
