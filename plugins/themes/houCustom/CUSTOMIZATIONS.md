# HOU Custom Theme - Customizations

## Tổng quan các cải tiến giao diện

Theme houCustom đã được custom với các giao diện hiện đại và responsive cho các chức năng chính của OJS.

## Các trang đã được custom

### 1. **Trang chủ (indexJournal.tpl)**
- ✅ Hero Section với overlay gradient đẹp mắt
- ✅ Featured highlights section
- ✅ Cải thiện hiển thị mô tả tạp chí
- ✅ Announcements với container layout
- ✅ Current Issue với badge "New" và styling hiện đại
- ✅ Button "View All Issues" với hover effects và icon arrow
- ✅ Additional content wrapper với card design

**Đặc điểm nổi bật:**
- Hero image với overlay gradient màu xanh @primary
- Section titles với underline accent
- Responsive design cho mobile
- Smooth animations và transitions

### 2. **Trang tìm kiếm (search.tpl)**
- ✅ Header gradient với search icon
- ✅ Search input với icon và enhanced styling
- ✅ Advanced filters trong card với improved layout
- ✅ Submit button với icon và hover effects
- ✅ Form được đặt trong card với shadow

**Đặc điểm nổi bật:**
- Search icon SVG trong header và input field
- Focus states với border color và box-shadow
- Advanced filters trong card riêng biệt
- Responsive form layout

### 3. **Navigation Menu (primaryNavMenu.tpl)**
- ✅ Icons cho mỗi menu item (SVG)
- ✅ Dropdown menu với animation
- ✅ Hover effects với background và underline
- ✅ Mobile responsive dropdown
- ✅ Sticky header enhancement

**Đặc điểm nổi bật:**
- Icon bell cho announcements
- Icon document cho current issue
- Icon package cho archives
- Icon info cho about
- Dropdown arrow animation (rotate 180deg on hover)

### 4. **Issue Table of Contents (issue_toc.tpl)**
- ✅ Issue header trong card layout
- ✅ Grid layout cho cover image và meta info
- ✅ Enhanced pub IDs display
- ✅ Published date với calendar icon
- ✅ Galleys section với gradient background
- ✅ Article sections với badges
- ✅ Article grid layout (responsive)

**Đặc điểm nổi bật:**
- Cover image với shadow
- Meta info trong grid responsive
- Galley buttons với hover effects
- Article cards với hover lift effect
- Section badges với gradient

### 5. **Article Details (article_details.tpl)**
- ✅ Enhanced author list với background
- ✅ ORCID icons và links
- ✅ Affiliation display
- ✅ Improved spacing và typography

## CSS Components mới

### 1. **custom-enhancements.less**
Chứa các styles cho:
- Hero section
- Container
- Section titles
- Buttons (btn, btn-primary)
- Search page enhancements
- Article details improvements
- Animations (fadeInUp)
- Responsive design

### 2. **navigation-enhanced.less**
Chứa các styles cho:
- Enhanced navigation menu
- Dropdown menus
- Icons và hover effects
- Mobile navigation
- Sticky header

### 3. **issue-toc-enhanced.less**
Chứa các styles cho:
- Issue heading card
- Cover image layout
- Galleys section
- Article sections
- Article grid
- Article summary cards

## Color Scheme

**Primary Color:** `#1E6292` (Blue - có thể thay đổi trong theme settings)

**Gradient Colors:**
- Hero overlay: `rgba(30, 98, 146, 0.85)` to `rgba(30, 98, 146, 0.65)`
- Buttons: `@primary` to `darken(@primary, 10%)`
- Badge "New": `#ff6b6b` to `#ee5a6f`

**Neutral Colors:**
- Background: `#f8f9fa`, `#ffffff`
- Text: `#333`, `#555`, `#666`
- Borders: `#e0e0e0`, `#ddd`

## Icons

Tất cả icons sử dụng SVG inline với stroke-based design:
- Search icon
- Bell icon (announcements)
- Document icon (current issue)
- Package icon (archives)
- Info icon (about)
- Calendar icon (published date)
- Arrow icon (navigation)

## Responsive Breakpoints

- **Desktop:** > 992px - Full layout
- **Tablet:** 768px - 992px - Adjusted grid
- **Mobile:** < 768px - Single column, stacked layout

## Animation Effects

- **fadeInUp:** Fade in với slide up motion
- **Hover effects:** Transform translateY(-2px to -4px)
- **Dropdown:** Opacity và transform transitions
- **Buttons:** Scale và shadow transitions

## Cách sử dụng

1. **Compile LESS files:** Theme sẽ tự động compile LESS khi active
2. **Clear cache:** Xóa cache trong OJS admin nếu thay đổi không hiển thị
3. **Customize colors:** Thay đổi màu primary trong theme settings

## Tùy chỉnh thêm

Để tùy chỉnh thêm:

1. **Thay đổi màu sắc:** Edit `baseColour` option trong theme settings
2. **Thay đổi typography:** Edit `typography` option trong theme settings
3. **Custom CSS:** Thêm vào file `custom-enhancements.less`
4. **Custom templates:** Override các template trong folder `templates/frontend/`

## Browser Support

- ✅ Chrome/Edge (latest)
- ✅ Firefox (latest)
- ✅ Safari (latest)
- ✅ Mobile browsers

## Performance

- Sử dụng CSS transitions thay vì JavaScript animations
- SVG icons inline để giảm HTTP requests
- Optimize images với proper sizing
- LESS compilation cho production

## Author

Customized for Hanoi Open University
Date: January 2026
