// components/lightbox.js
// GLightbox — lightbox foto & video kegiatan HIMSI
import GLightbox from 'glightbox';

export function initLightbox() {
    GLightbox({
        selector:        '.js-lightbox',
        touchNavigation: true,
        loop:            true,
        autoplayVideos:  true,
        openEffect:      'zoom',
        closeEffect:     'zoom',
        slideEffect:     'slide',
        moreLength:      0,
        svg: {
            close:   '<i class="ph-fill ph-x text-2xl"></i>',
            next:    '<i class="ph-fill ph-arrow-right text-2xl"></i>',
            prev:    '<i class="ph-fill ph-arrow-left text-2xl"></i>',
        },
    });
}
