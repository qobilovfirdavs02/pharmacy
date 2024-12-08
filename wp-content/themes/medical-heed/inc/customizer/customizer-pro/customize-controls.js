jQuery(document).ready(function ($) {
    /**
     * Customizer Option Auto focus
     */
    jQuery('h3.accordion-section-title').on('click', function () {
        var id = $(this).parent().attr('id');
        var is_panel = id.includes("panel");
        var is_section = id.includes("section");

        if (is_panel) {
            focus_item = id.replace('accordion-panel-', '');
            console.log(focus_item);
            history.pushState({}, null, '?autofocus[panel]=' + focus_item);
        }
        if (is_section) {
            focus_item = id.replace('accordion-section-', '');
            history.pushState({}, null, '?autofocus[section]=' + focus_item);
        }
    });
});

(function (api) {

    // Extends our custom "medicalhead" section.
    api.sectionConstructor['medicalheed'] = api.Section.extend({

        // No events for this type of section.
        attachEvents: function () { },

        // Always make the section active.
        isContextuallyActive: function () {
            return true;
        }
    });

})(wp.customize);


// Extends our custom section.
(function (api) {

    api.sectionConstructor['medical-heed-pro-section'] = api.Section.extend({

        // No events for this type of section.
        attachEvents: function () { },

        // Always make the section active.
        isContextuallyActive: function () {
            return true;
        }
    });

    api.sectionConstructor['medical-heed-upgrade-section'] = api.Section.extend({

        // No events for this type of section.
        attachEvents: function () { },

        // Always make the section active.
        isContextuallyActive: function () {
            return true;
        }
    });

})(wp.customize);