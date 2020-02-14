<!DOCTYPE>
<html class="no-touch" lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Nuestra Visión | Películas, Noticias, Deportes y Entretenimiento - Nuestra Vision</title>
    <style id="rocket-critical-css">
        .mpp-container * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        .mpp-popup {
            display: none;
            position: fixed;
            z-index: 99999999;
            left: 50%;
            top: 50%;
            width: 640px;
            height: 360px;
            margin: 0;
            padding: 0;
            max-height: 100%;
            font-size: 16px;
            background: transparent;
            -webkit-box-sizing: border-box !important;
            box-sizing: border-box !important
        }

        .mpp-popup.mpp-position-middle-center {
            top: 50%;
            left: 50%;
            right: auto;
            -webkit-transform-origin: center center;
            -ms-transform-origin: center center;
            transform-origin: center center;
            -webkit-transform: translate(-50%, -50%) scale(1);
            -ms-transform: translate(-50%, -50%) scale(1);
            transform: translate(-50%, -50%) scale(1)
        }

        .mpp-wrap {
            position: relative;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center
        }

        .mpp-content {
            width: 100%;
            height: 100%
        }

        .mpp-content i {
            font-size: 1em
        }

        .mpp-content .mpp-content-desktop,
        .mpp-content .mpp-content-mobile {
            overflow: visible;
            position: relative;
            left: 0;
            top: 0;
            margin: auto
        }

        .mpp-content .mpp-content-mobile {
            display: none
        }

        .mpp-overlay {
            display: none;
            position: fixed !important;
            left: 0 !important;
            top: 0 !important;
            width: 100% !important;
            height: 100% !important;
            min-width: 100%;
            min-height: 100%;
            z-index: 99999998
        }

        .mpp-overlay .mpp-overlay-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 1, 5, 0.8);
            opacity: 1
        }

        .mpp-element {
            position: absolute;
            -webkit-box-sizing: border-box !important;
            box-sizing: border-box !important
        }

        .mpp-element .mpp-element-content {
            position: relative;
            width: 100%;
            height: 100%;
            max-width: 100%;
            max-height: 100%;
            opacity: 1;
            padding: 0;
            margin: 0;
            -webkit-box-sizing: border-box !important;
            box-sizing: border-box !important
        }

        .mpp-element .mpp-element-content input {
            max-width: 100% !important;
            -webkit-box-sizing: border-box !important;
            box-sizing: border-box !important;
            outline: none !important;
            margin: 0 !important
        }

        .mpp-element .mpp-element-content img {
            margin: 0 !important
        }

        .mpp-element:not(.mpp-element-shortcode) .mpp-element-content {
            color: #444;
            font-family: inherit;
            font-size: 20px;
            font-weight: 400;
            font-style: normal;
            text-align: left;
            line-height: 22px;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            border-style: solid;
            border-width: 0;
            border-radius: 0;
            border-color: rgba(255, 255, 255, 0);
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat
        }

        .mpp-element.mpp-element-image img {
            display: block;
            width: 100%;
            border-radius: inherit
        }

        .mpp-element.mpp-element-field_first_name .mpp-element-content input,
        .mpp-element.mpp-element-field_last_name .mpp-element-content input,
        .mpp-element.mpp-element-field_email .mpp-element-content input {
            display: block;
            width: 100% !important;
            height: 100% !important
        }

        @font-face {
            font-family: "FlaticonClose";
            src: url(https://nuestravision.staging.wpengine.com/wp-content/plugins/master-popups/assets/public/fonts/FlaticonClose.eot);
            src: url(https://nuestravision.staging.wpengine.com/wp-content/plugins/master-popups/assets/public/fonts/FlaticonClose.eot?#iefix) format("embedded-opentype"), url(https://nuestravision.staging.wpengine.com/wp-content/plugins/master-popups/assets/public/fonts/FlaticonClose.woff) format("woff"), url(https://nuestravision.staging.wpengine.com/wp-content/plugins/master-popups/assets/public/fonts/FlaticonClose.ttf) format("truetype"), url(https://nuestravision.staging.wpengine.com/wp-content/plugins/master-popups/assets/public/fonts/FlaticonClose.svg#FlaticonClose) format("svg");
            font-weight: normal;
            font-style: normal
        }

        @media screen and (-webkit-min-device-pixel-ratio:0) {
            @font-face {
                font-family: "FlaticonClose";
                src: url(https://nuestravision.staging.wpengine.com/wp-content/plugins/master-popups/assets/public/fonts/FlaticonClose.svg#FlaticonClose) format("svg")
            }
        }

        [class^="mppfic-"] {
            display: inline-block;
            font: normal normal normal 14px/1 FlaticonClose;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .mppfic-close-cancel-circular-4:before {
            content: "\f107"
        }

        .tt_upcoming_events_wrapper * {
            box-sizing: content-box;
            -moz-box-sizing: content-box;
            -webkit-box-sizing: content-box
        }

        .tt_upcoming_event_controls a {
            border: 1px solid #EFEFEF;
            display: block;
            float: left;
            padding: 6px;
            outline: none
        }

        .tt_upcoming_event_controls a#upcoming_event_prev {
            margin-right: 2px
        }

        .tt_upcoming_event_controls span {
            display: block;
            width: 11px;
            height: 11px
        }

        .tt_upcoming_event_controls .tt_upcoming_event_prev_arrow {
            background: url(https://nuestravision.staging.wpengine.com/wp-content/plugins/timetable/images/arrow_scroll_up.png) no-repeat
        }

        .tt_upcoming_event_controls .tt_upcoming_event_next_arrow {
            background: url(https://nuestravision.staging.wpengine.com/wp-content/plugins/timetable/images/arrow_scroll_down.png) no-repeat
        }

        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v16/S6uyw4BMUTPHjxAwXjeu.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v16/S6uyw4BMUTPHjx4wXg.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v16/S6u9w4BMUTPHh6UVSwaPGR_p.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v16/S6u9w4BMUTPHh6UVSwiPGQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        * {
            box-sizing: border-box
        }

        html {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            text-decoration: none;
            background: none;
            -webkit-text-decoration-skip: objects
        }

        strong {
            font-weight: bold
        }

        img {
            height: auto;
            max-width: 100%
        }

        input {
            vertical-align: top;
            text-transform: none;
            color: inherit;
            font: inherit;
            border: none;
            margin: 0
        }

        input:not([type="submit"]) {
            outline: none !important
        }

        ::-moz-focus-inner {
            border: 0
        }

        input::-ms-clear {
            display: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        :-webkit-full-screen-ancestor:not(iframe) {
            animation: none !important
        }

        ::-moz-placeholder {
            opacity: 0.5;
            color: inherit
        }

        ::-webkit-input-placeholder {
            color: inherit;
            opacity: 0.5
        }

        h1,
        h3,
        h4 {
            font-family: inherit;
            line-height: 1.4;
            margin: 0 0 1.5rem;
            padding-top: 1.5rem
        }

        h1:first-child,
        h4:first-child {
            padding-top: 0
        }

        p,
        ul {
            margin: 0 0 1.5rem
        }

        p:empty {
            display: none
        }

        ul {
            list-style-type: disc;
            margin-left: 2.5rem
        }

        li {
            margin: 0 0 0.5rem
        }

        li>ul {
            margin-bottom: 0.5rem;
            margin-top: 0.5rem
        }

        h1:last-child,
        h3:last-child,
        h4:last-child,
        p:last-child,
        ul:last-child,
        li:last-child {
            margin-bottom: 0
        }

        .has_text_color h1,
        .has_text_color h3,
        .has_text_color h4 {
            color: inherit
        }

        input[type="text"],
        input[type="email"] {
            padding: 0 0.8rem;
            width: 100%;
            border-radius: 0.3rem;
            box-shadow: 0 0 0 2px transparent, 0 1px 0 rgba(0, 0, 0, 0.08) inset
        }

        input[type="text"],
        input[type="email"] {
            line-height: 2.8rem;
            height: 2.8rem
        }

        .hidden {
            display: none !important
        }

        .i-cf:before,
        .i-cf:after {
            content: ' ';
            display: table
        }

        .i-cf:after {
            clear: both
        }

        .aligncenter {
            clear: both;
            display: block;
            margin-left: auto;
            margin-right: auto
        }

        .align_center {
            text-align: center
        }

        .l-canvas {
            margin: 0 auto;
            width: 100%;
            flex-grow: 1
        }

        @media screen and (min-width:1025px) {
            body:not(.us_iframe) {
                display: flex;
                flex-direction: column;
                min-height: 100vh
            }
        }

        @media screen and (-ms-high-contrast:active),
        (-ms-high-contrast:none) {
            body {
                display: block !important
            }
        }

        .l-subheader,
        .l-section {
            padding-left: 2.5rem;
            padding-right: 2.5rem
        }

        .l-section {
            position: relative;
            margin: 0 auto
        }

        .l-section-img {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-position: center center;
            background-size: cover;
            opacity: 0
        }

        .l-section-h {
            position: relative;
            margin: 0 auto;
            width: 100%
        }

        .l-section.height_medium {
            padding-top: 4rem;
            padding-bottom: 4rem
        }

        .l-section.height_full {
            padding-top: 4rem;
            padding-bottom: 4rem;
            min-height: 100vh
        }

        @media screen and (-ms-high-contrast:active),
        (-ms-high-contrast:none) {
            .l-section.height_full {
                height: 100vh
            }
        }

        .l-section.height_full.valign_center {
            display: flex;
            flex-direction: column;
            justify-content: center
        }

        .l-body .vc_row:after,
        .l-body .vc_row:before,
        .l-body .vc_column-inner:after,
        .l-body .vc_column-inner:before {
            display: none
        }

        .g-cols {
            display: flex;
            flex-wrap: wrap
        }

        .vc_column_container {
            display: flex;
            flex-direction: column
        }

        .vc_column-inner {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            flex-shrink: 0
        }

        .g-cols.type_default {
            margin: 0 -1.5rem
        }

        .g-cols.type_default>div>.vc_column-inner {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .g-cols.type_boxes>div>.vc_column-inner {
            padding: 4rem
        }

        @media screen and (-ms-high-contrast:active),
        (-ms-high-contrast:none) {

            .vc_column-inner,
            .wpb_wrapper {
                min-height: 1px
            }
        }

        .l-header a {
            color: inherit
        }

        .l-subheader-cell {
            display: flex;
            align-items: center;
            flex-grow: 1
        }

        .l-subheader-cell.at_left {
            justify-content: flex-start
        }

        .header_hor .l-subheader-cell.at_left>* {
            margin-right: 1.4rem
        }

        .l-subheader-cell.at_center {
            justify-content: center
        }

        .l-subheader-cell.at_right {
            justify-content: flex-end
        }

        .header_hor .l-subheader-cell.at_right>* {
            margin-left: 1.4rem
        }

        .l-header:before {
            content: 'auto';
            left: -100%;
            position: absolute;
            top: -100%;
            visibility: hidden !important
        }

        .w-btn {
            display: inline-block;
            vertical-align: top;
            text-align: center;
            line-height: 1.2;
            position: relative
        }

        .w-btn {
            padding: 0.8em 1.8em
        }

        .w-btn:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: inherit;
            border-style: solid;
            border-color: inherit;
            border-image: inherit
        }

        .links_underline a.w-btn {
            border-width: 0 !important
        }

        .w-btn-wrapper {
            margin: 0.3rem 0
        }

        .w-counter-value {
            line-height: 1
        }

        .w-counter-title {
            padding: 0.6rem 0;
            margin: 0
        }

        .l-header .w-image {
            flex-shrink: 0;
            height: 35px
        }

        .l-main .w-image {
            max-width: 100%
        }

        .w-image-h {
            display: block;
            border-radius: inherit;
            border-color: inherit !important;
            color: inherit !important
        }

        .w-image:not([class*="style_phone"]) .w-image-h {
            background: inherit
        }

        .l-header .w-image-h {
            height: inherit
        }

        .w-image img {
            vertical-align: top;
            border-radius: inherit
        }

        .l-header .w-image img {
            display: block;
            height: inherit;
            width: auto
        }

        .w-image-h[href] {
            position: relative
        }

        .l-subheader-cell .w-nav {
            margin-left: 0;
            margin-right: 0
        }

        .w-nav-list {
            list-style: none;
            margin: 0
        }

        .w-nav-list:not(.level_1) {
            display: none
        }

        .w-nav.type_desktop .w-nav-list:not(.level_1) {
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1), 0 5px 10px rgba(0, 0, 0, 0.2)
        }

        .w-nav.type_desktop .w-nav-list.level_2 {
            text-align: left;
            position: absolute;
            left: 0;
            z-index: 120;
            min-width: 12rem
        }

        .w-nav .menu-item {
            display: block;
            position: relative;
            margin: 0
        }

        .w-nav-anchor {
            display: block;
            overflow: hidden;
            position: relative;
            border: none !important;
            outline: none !important
        }

        .w-nav.type_desktop .w-nav-anchor.level_1 {
            z-index: 1
        }

        .w-nav.type_desktop .w-nav-anchor:not(.level_1) {
            line-height: 1.5em;
            padding: 0.6em 20px;
            white-space: nowrap
        }

        .w-nav-arrow {
            display: none;
            vertical-align: top;
            font-weight: normal;
            line-height: inherit;
            text-transform: none;
            text-align: center
        }

        .w-nav-arrow:before {
            content: '\f107';
            vertical-align: top;
            font-family: fontawesome;
            font-weight: 400
        }

        .w-nav.type_desktop .w-nav-anchor.level_1 .w-nav-arrow:before {
            font-size: 1.3em;
            margin-left: 0.4em
        }

        .w-nav.type_desktop .w-nav-list.level_2 .w-nav-arrow:before {
            content: '\f105';
            font-size: 1.5em
        }

        .btn.menu-item {
            margin-left: 0.5em;
            margin-right: 0.5em
        }

        .btn.menu-item>a {
            line-height: 2.6em !important;
            padding: 0 1.4em !important;
            border-radius: 0.3em;
            border: none !important
        }

        .menu-item.btn>a .w-nav-title:after {
            display: none !important
        }

        .header_hor .w-nav.type_desktop>.w-nav-list {
            display: flex;
            align-items: center
        }

        .header_hor .w-nav.type_desktop>.w-nav-list>.menu-item {
            flex-shrink: 0
        }

        .l-header.bg_transparent:not(.sticky) .type_desktop .menu-item.level_1>.w-nav-anchor {
            background: none
        }

        .w-nav.type_desktop.dropdown_height .w-nav-list:not(.level_1) {
            display: block;
            transform-origin: 50% 0;
            transform: scaleY(0) translateZ(0);
            opacity: 0
        }

        .header_hor .l-subheader-cell.at_right .w-nav:last-child .w-nav-control {
            margin-right: -0.8rem
        }

        .w-nav-control {
            display: none;
            line-height: 50px;
            height: 50px;
            padding: 0 0.8rem;
            color: inherit
        }

        .w-nav-icon {
            display: inline-block;
            vertical-align: top;
            font-size: 20px;
            position: relative;
            height: inherit;
            width: 1em
        }

        .w-nav-icon i,
        .w-nav-icon i:before,
        .w-nav-icon i:after {
            content: '';
            display: block;
            position: absolute;
            height: 0;
            width: inherit
        }

        .w-nav-icon i {
            border-bottom: 0.15em solid
        }

        .w-nav-icon i:before,
        .w-nav-icon i:after {
            border-bottom: inherit
        }

        .w-nav-icon i {
            top: 50%;
            transform: translateY(-50%)
        }

        .w-nav-icon i:before {
            top: -0.3333em
        }

        .w-nav-icon i:after {
            top: 0.3333em
        }

        .w-nav-close {
            display: none;
            position: absolute;
            top: 0;
            right: 0;
            text-align: center;
            font-size: 3rem;
            line-height: 6rem;
            width: 6rem;
            opacity: 0.5
        }

        .w-nav-close:before {
            content: '\f00d';
            font-family: fontawesome;
            font-weight: normal;
            vertical-align: top
        }

        .w-separator {
            clear: both;
            overflow: hidden;
            line-height: 0;
            height: 1.5rem
        }

        .w-separator-h {
            display: inline-flex;
            align-items: center;
            height: inherit
        }

        .w-separator-h:before,
        .w-separator-h:after {
            content: '';
            position: absolute;
            top: 50%;
            height: 0;
            width: 200rem;
            border-top-width: 1px;
            border-top-style: solid
        }

        .w-separator-h:before {
            right: 100%;
            margin-right: 0.6em
        }

        .w-separator-h:after {
            left: 100%;
            margin-left: 0.6em
        }

        .w-separator.thick_2 .w-separator-h:before,
        .w-separator.thick_2 .w-separator-h:after {
            margin-top: -1px;
            border-top-width: 2px
        }

        .w-separator:not(.with_content) {
            position: relative
        }

        .w-separator:not(.with_content) .w-separator-h:before {
            left: -50%;
            right: auto
        }

        .w-separator:not(.with_content) .w-separator-h:after {
            display: none
        }

        .w-separator.size_medium:empty {
            height: 3rem
        }

        .w-socials-item {
            display: inline-block;
            vertical-align: top;
            position: relative
        }

        .w-socials-item-link {
            display: block;
            text-align: center;
            position: relative;
            overflow: hidden;
            line-height: 2.5em;
            width: 2.5em;
            border: none !important;
            border-radius: inherit;
            z-index: 0
        }

        .w-socials-item-link-hover {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0
        }

        .w-socials-item-link:after {
            display: block;
            line-height: inherit;
            position: relative
        }

        .w-socials-item-link:after {
            font-family: 'Font Awesome 5 Brands'
        }

        .w-socials-item-popup {
            display: none;
            position: absolute;
            left: 50%;
            bottom: 100%;
            text-align: center;
            white-space: nowrap;
            z-index: 90;
            font-size: 0.9rem;
            line-height: 2.4rem;
            padding: 0 1rem;
            margin-bottom: 7px;
            border-radius: 0.25rem;
            background: #333;
            color: #fff;
            opacity: 0;
            visibility: hidden;
            transform: translate3d(-50%, -1em, 0)
        }

        .w-socials-item-popup:after {
            content: '';
            display: block;
            position: absolute;
            left: 50%;
            bottom: -7px;
            margin-left: -8px;
            width: 0;
            height: 0;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 8px solid #333
        }

        .w-socials.style_colored .w-socials-item-link-hover {
            display: block;
            height: 100% !important;
            opacity: 1 !important
        }

        .w-socials.style_colored .w-socials-item-link {
            color: #fff !important
        }

        .w-socials.color_brand .w-socials-item.facebook .w-socials-item-link {
            color: #1e77f0
        }

        .w-socials-item.facebook .w-socials-item-link-hover {
            background: #1e77f0
        }

        .w-socials-item.facebook .w-socials-item-link:after {
            content: '\f09a'
        }

        .w-socials.color_brand .w-socials-item.instagram .w-socials-item-link {
            color: inherit
        }

        .w-socials-item.instagram .w-socials-item-link-hover {
            background: #a17357;
            background: radial-gradient(circle farthest-corner at 35% 100%, #fec564, transparent 50%), radial-gradient(circle farthest-corner at 10% 140%, #feda7e, transparent 50%), radial-gradient(ellipse farthest-corner at 0 -25%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 20% -50%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 0, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 60% -20%, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 100%, #d9317a, transparent), linear-gradient(#6559ca, #bc318f 30%, #e42e66 50%, #fa5332 70%, #ffdc80 100%)
        }

        .w-socials-item.instagram .w-socials-item-link:after {
            content: '\f16d';
            font-size: 1.1em
        }

        .w-socials.color_brand .w-socials-item.twitter .w-socials-item-link {
            color: #55acee
        }

        .w-socials-item.twitter .w-socials-item-link-hover {
            background: #55acee
        }

        .w-socials-item.twitter .w-socials-item-link:after {
            content: '\f099'
        }

        @font-face {
            font-display: block;
            font-style: normal;
            font-family: "fontawesome";
            font-weight: 900;
            src: url("https://nuestravision.staging.wpengine.com/wp-content/themes/Impreza/fonts/fa-solid-900.woff2") format("woff2"), url("https://nuestravision.staging.wpengine.com/wp-content/themes/Impreza/fonts/fa-solid-900.woff") format("woff")
        }

        @font-face {
            font-display: block;
            font-style: normal;
            font-family: "fontawesome";
            font-weight: 400;
            src: url("https://nuestravision.staging.wpengine.com/wp-content/themes/Impreza/fonts/fa-regular-400.woff2") format("woff2"), url("https://nuestravision.staging.wpengine.com/wp-content/themes/Impreza/fonts/fa-regular-400.woff") format("woff")
        }

        @font-face {
            font-display: block;
            font-style: normal;
            font-family: "fontawesome";
            font-weight: 300;
            src: url("https://nuestravision.staging.wpengine.com/wp-content/themes/Impreza/fonts/fa-light-300.woff2") format("woff2"), url("https://nuestravision.staging.wpengine.com/wp-content/themes/Impreza/fonts/fa-light-300.woff") format("woff")
        }

        @font-face {
            font-display: block;
            font-style: normal;
            font-family: "Font Awesome 5 Brands";
            font-weight: 400;
            src: url("https://nuestravision.staging.wpengine.com/wp-content/themes/Impreza/fonts/fa-brands-400.woff2") format("woff2"), url("https://nuestravision.staging.wpengine.com/wp-content/themes/Impreza/fonts/fa-brands-400.woff") format("woff")
        }

        html {
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            font-size: 15px;
            line-height: 20px
        }

        h1 {
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            font-size: 48px;
            line-height: 1.4;
            letter-spacing: 0em;
            margin-bottom: 1.5rem
        }

        h3 {
            font-family: 'Lato', sans-serif;
            font-weight: 300;
            font-size: 26px;
            line-height: 1.4;
            letter-spacing: 0em;
            margin-bottom: 1.5rem
        }

        h4 {
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            font-size: 22px;
            line-height: 1.4;
            letter-spacing: 0em;
            margin-bottom: 1.5rem
        }

        @media (max-width:767px) {
            html {
                font-size: 16px;
                line-height: 28px
            }

            h1 {
                font-size: 25px
            }

            h3 {
                font-size: 22px
            }

            h4 {
                font-size: 20px
            }

            h4.vc_custom_heading {
                font-size: 20px !important
            }
        }

        body {
            background: #f2f1f0
        }

        body,
        .l-header.pos_fixed {
            min-width: 1240px
        }

        .l-subheader-h,
        .l-section-h,
        .l-main .aligncenter {
            max-width: 1140px
        }

        @media screen and (max-width:1215px) {
            .l-main .aligncenter {
                max-width: calc(100vw - 5rem)
            }
        }

        .wpb_text_column:not(:last-child) {
            margin-bottom: 1.5rem
        }

        @media (max-width:767px) {
            .l-canvas {
                overflow: hidden
            }

            .g-cols>div:not([class*=" vc_col-"]) {
                width: 100%;
                margin: 0 0 1rem
            }

            .g-cols.type_boxes>div,
            .g-cols:not(.reversed)>div:last-child {
                margin-bottom: 0
            }
        }

        .us-btn-style_3 {
            font-family: 'Lato', sans-serif;
            font-weight: 700;
            font-style: normal;
            text-transform: uppercase;
            letter-spacing: -0.01em;
            border-radius: 0.3em;
            padding: 0.8em 1.8em;
            background: #EE2D63;
            border-color: transparent;
            color: #ffffff !important;
            box-shadow: 0 0em 0em rgba(0, 0, 0, 0.2)
        }

        .us-btn-style_3:before {
            border-width: 2px
        }

        .w-header-show {
            background: rgba(0, 0, 0, 0.3)
        }

        .l-subheader.at_middle {
            background: #F5F5F5
        }

        .l-subheader.at_middle {
            color: #EE2D63
        }

        .l-header.bg_transparent:not(.sticky) .l-subheader {
            color: #EE2D63
        }

        .l-header.bg_transparent:not(.sticky) .w-nav-title:after {
            background: #9ad04a
        }

        .w-nav-title:after {
            background: #9ad04a
        }

        .w-nav .menu-item.level_1.current-menu-item>a {
            background: ;
            color: #9ad04a
        }

        .l-header.bg_transparent:not(.sticky) .w-nav.type_desktop .menu-item.level_1.current-menu-item>a {
            background: transparent;
            color: #9ad04a
        }

        .w-nav-list:not(.level_1) {
            background: #ffffff;
            color: #000000
        }

        .btn.menu-item>a {
            background: #EE2D63 !important;
            color: #ffffff !important
        }

        .l-canvas {
            background: #ffffff
        }

        input {
            background: #ffffff
        }

        input,
        .l-section,
        .vc_column_container,
        .vc_column-inner,
        .w-image {
            border-color: #ebebeb
        }

        h1,
        h3,
        h4 {
            color: #000000
        }

        input,
        .l-canvas {
            color: #000000
        }

        a {
            color: #000000
        }

        .w-socials-item-link-hover {
            background: #000000
        }

        body {
            overflow-x: hidden;
            min-width: 0 !important
        }

        .l-header.pos_fixed {
            min-width: 0 !important
        }

        .vc_col-xs-4 {
            width: 33.3333%
        }

        @media (min-width:768px) {
            .vc_col-sm-4 {
                width: 33.3333%
            }

            .vc_col-sm-12 {
                width: 100%
            }
        }

        @media (min-width:1200px) {
            .vc_hidden-lg {
                display: none !important
            }
        }

        @media (max-width:767px) {
            .vc_hidden-xs {
                display: none !important
            }

            .g-cols>div:not([class*="vc_col-xs-"]) {
                width: 100%;
                margin: 0 0 1rem
            }

            .g-cols.type_boxes>div,
            .g-cols:not(.reversed)>div:last-child {
                margin-bottom: 0
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .vc_hidden-sm {
                display: none !important
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .vc_hidden-md {
                display: none !important
            }
        }

        @media (max-width:1024px) {
            .l-section.height_medium {
                padding-top: 2.5rem;
                padding-bottom: 2.5rem
            }

            .g-cols.type_boxes>div>.vc_column-inner {
                padding: 2.5rem
            }

            .w-separator.size_medium:empty {
                height: calc(0.6rem + 2vw)
            }
        }

        @media screen and (max-width:900px) {
            .l-subheader {
                padding-left: 1rem !important;
                padding-right: 1rem !important
            }
        }

        @media screen and (max-width:767px) {

            h1,
            h3,
            h4 {
                margin-bottom: 1rem
            }

            .w-nav-close {
                font-size: 2rem;
                line-height: 4rem;
                width: 4rem
            }
        }

        @media screen and (max-width:600px) {
            .g-cols.type_boxes>div>.vc_column-inner {
                padding: 1.5rem
            }

            .w-header-show {
                margin: 10px !important
            }

            .l-subheader,
            .l-section {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .l-section.height_medium {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem
            }

            .l-main .aligncenter {
                max-width: 100% !important
            }
        }

        @media screen and (max-width:480px) {
            .w-nav-anchor.level_2 {
                white-space: normal
            }
        }

        span.w-nav-title {
            font-weight: 700 !important
        }

        .tt_upcoming_event_controls {
            display: none !important
        }

        .wpb_column,
        .wpb_row {
            position: relative
        }

        .vc_row,
        .wpb_column,
        .wpb_row {
            position: relative
        }
    </style>
    <style type="text/css" data-type="vc_custom-css">
        #intro h2,
        #intro h4,
        #intro h5 {
            color: #ffffff !important
        }

        @media screen and (max-width:768px) {

            #intro h1,
            #social-main-row h1 {
                color: #ffffff !important
            }
        }

        #asi-somos-row .w-counter-title {
            color: #ffffff !important
        }

        #thumbnail_row img {
            width: 100%
        }

        #thumbnail_row a {
            outline: 0
        }

        span#thumbnail-title {
            margin: 5px 0 10px 0;
            display: block;
            font-size: 15px;
            line-height: 20px
        }

        .w-socials-item-link {
            line-height: 4.5em;
            width: 4.5em
        }

        .w-socials-item.facebook .w-socials-item-link:after,
        .w-socials-item.instagram .w-socials-item-link:after,
        .w-socials-item.twitter .w-socials-item-link:after {
            font-size: 2em
        }

        .heading-img,
        .heading-img-2 {
            color: #d43d67 !important
        }

        .heading-img {
            background: url(https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/04/NV_Pleca-3.png) center no-repeat;
            background-size: cover
        }

        h1.heading-img {
            padding: 50px 0
        }

        .heading-img-2 {
            background: url(https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/04/NV_Pleca-4.png) center no-repeat;
            background-size: cover
        }

        h1.heading-img-2 {
            padding: 35px 0
        }

        #heading-position-2 {
            position: relative;
            top: -100px
        }

        h4,
        .widgettitle {
            font-weight: 400px !important
        }

        #whatsnew {
            font-weight: 700
        }

        #intro .l-section-h {
            padding-bottom: 0;
            padding-top: 0px !important
        }

        .linkwrap {
            display: inline-block
        }

        .blocker {
            position: absolute;
            height: 100%;
            width: 100%;
            z-index: 3;
            top: 0;
            left: 0;
            background: rgba(255, 0, 0, 0)
        }

        .linkwrap iframe {
            z-index: 2
        }

        #availability_text h3,
        #availability_text h4 {
            color: #fff;
            text-align: center;
            padding-bottom: 0.5rem !important
        }

        section#intro {
            padding-bottom: 150px
        }

        #areas_text h5 {
            margin-bottom: -5px
        }

        .regions_col {
            padding: 0
        }

        #regions_col div.vc_column-inner {
            border: 3px solid #fff;
            box-shadow: 1px 1px 10px #00000047;
            margin: 1px
        }

        .territory_green_box {
            background-color: #10d0a3
        }

        .territory_red_box {
            background-color: #da4265
        }

        .territory_purple_box {
            background-color: #d9398d
        }

        .territory_blue_box {
            background-color: #3cafef
        }

        .territory_container_green>div,
        .territory_container_red>div,
        .territory_container_blue>div,
        .territory_container_pink>div {
            transition: all .4s ease-in-out;
            cursor: pointer
        }

        .territory_container_green>div:hover {
            background-color: #0e9a79 !important
        }

        .territory_container_red>div:hover {
            background-color: #a0304a !important
        }

        .territory_container_blue>div:hover {
            background-color: #318fc3 !important
        }

        .territory_container_pink>div:hover {
            background-color: #b32e74 !important
        }

        #headertitle_mobile {
            color: #fff;
            font-size: 30px
        }

        @media screen and (max-width:1024px) {

            h1.heading-img,
            h1.heading-img-2 {
                font-size: 30px
            }

            #heading-position-2 {
                top: -85px
            }

            .w-socials-item-link {
                line-height: 2.5em;
                width: 2.5em
            }

            .w-socials-item.facebook .w-socials-item-link:after,
            .w-socials-item.instagram .w-socials-item-link:after,
            .w-socials-item.twitter .w-socials-item-link:after {
                font-size: 1.5em
            }
        }

        @media screen and (min-width:768px) {
            #mobile-hero-section {
                display: none !important
            }

            #mobile-hero-section.l-section-h {
                padding: 0 !important
            }

            .regions_col {
                width: 90%;
                margin: 0 auto 1rem
            }
        }

        @media screen and (max-width:767px) {
            #hero-section {
                display: none !important
            }

            .territories_container {
                margin: 0 .5em !important
            }
        }

        @media screen and (max-width:1024px) and (min-width:768px) {
            section#intro {
                padding-bottom: 170px
            }
        }

        @media screen and (max-width:768px) and (min-width:641px) {
            section#intro {
                padding-bottom: 140px
            }

            #areas_text h5 {
                font-size: 15px
            }
        }

        @media screen and (max-width:641px) {
            section#intro {
                padding-bottom: 70px
            }

            h1.heading-img,
            h1.heading-img-2 {
                display: none
            }

            h3.subheading {
                font-size: 25px !important
            }
        }
    </style>
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="https://nuestravision.tv/">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Nuestra Visión | Películas, Noticias, Deportes y Entretenimiento - Nuestra Vision">
    <meta property="og:url" content="https://nuestravision.tv/">
    <meta property="og:site_name" content="Nuestra Vision">
    <meta property="og:image" content="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/09/nuestra_vision_link_default_preview_img_09242019.jpg">
    <meta property="og:image:secure_url" content="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/09/nuestra_vision_link_default_preview_img_09242019.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Nuestra Visión | Películas, Noticias, Deportes y Entretenimiento - Nuestra Vision">
    <meta name="twitter:site" content="@nuestravisionmx">
    <meta name="twitter:image" content="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/09/nuestra_vision_link_default_preview_img_09242019.jpg">
    <meta name="twitter:creator" content="@nuestravisionmx">
    <script async="" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/cache/busting/facebook-tracking/fbpix-events-en_US-2.9.15.js"></script>
    <script async="" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/cache/busting/google-tracking/ga-540a077c7c8f90040147f97692128dd7.js"></script>
    <script type="application/ld+json" class="yoast-schema-graph yoast-schema-graph--main">
        {
            "@context": "https://schema.org",
            "@graph": [{
                "@type": "WebSite",
                "@id": "https://nuestravision.tv/#website",
                "url": "https://nuestravision.tv/",
                "name": "Nuestra Vision",
                "description": "The Most Exciting Mexican Channel Is Now Here!",
                "potentialAction": {
                    "@type": "SearchAction",
                    "target": "https://nuestravision.tv/?s={search_term_string}",
                    "query-input": "required name=search_term_string"
                }
            }, {
                "@type": "ImageObject",
                "@id": "https://nuestravision.tv/#primaryimage",
                "url": "https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/09/nuestra_vision_link_default_preview_img_09242019.jpg",
                "width": 1200,
                "height": 630,
                "caption": "Nuestra Vision shared post preview image."
            }, {
                "@type": "WebPage",
                "@id": "https://nuestravision.tv/#webpage",
                "url": "https://nuestravision.tv/",
                "inLanguage": "en-US",
                "name": "Nuestra Visi\u00f3n | Pel\u00edculas, Noticias, Deportes y Entretenimiento - Nuestra Vision",
                "isPartOf": {
                    "@id": "https://nuestravision.tv/#website"
                },
                "primaryImageOfPage": {
                    "@id": "https://nuestravision.tv/#primaryimage"
                },
                "datePublished": "2019-02-15T20:07:39+00:00",
                "dateModified": "2020-02-13T12:32:32+00:00"
            }]
        }
    </script>
    <link href="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/themes/Impreza/fonts/fa-brands-400.woff2" rel="preload" as="font" type="font/woff2" crossorigin="crossorigin">
    <link href="https://fonts.gstatic.com/s/lato/v16/S6u9w4BMUTPHh6UVSwiPGQ.woff2" rel="preload" as="font" type="font/woff2" crossorigin="crossorigin">
    <link href="https://insight.adsrvr.org" rel="dns-prefetch">
    <link href="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/plugins/master-popups/assets/public/fonts/FlaticonClose.woff" rel="preload" as="font" type="font/woff" crossorigin="crossorigin">
    <link href="https://fonts.gstatic.com/s/lato/v16/S6uyw4BMUTPHjx4wXg.woff2" rel="preload" as="font" type="font/woff2" crossorigin="crossorigin">
    <link href="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-includes/js/jquery/jquery.js" rel="prefetch" as="script">
    <link href="https://js.adsrvr.org/up_loader.1.1.0.js" rel="preload" as="script">
    <link href="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/plugins/wp-rocket/assets/js/lazyload/12.0/lazyload.min.js" rel="preload" as="script">
    <link href="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-includes/js/jquery/jquery.js" rel="preload" as="script">
    <link rel="alternate" type="application/rss+xml" title="Nuestra Vision » Feed" href="https://nuestravision.tv/feed/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="theme-color" content="#f5f5f5">
    <meta property="og:title" content="Nuestra Visión | Películas, Noticias, Deportes y Entretenimiento">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://nuestravision.tv/">
    <meta property="og:image" itemprop="image" content="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/09/nuestra_vision_link_default_preview_img_09242019-1024x538.jpg">
    <link rel="stylesheet" id="master-popups-css" href="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/plugins/master-popups/assets/public/css/master-popups.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" type="text/css" media="all">
    <link data-minify="1" rel="stylesheet" id="timetable_style-css" href="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/cache/min/1/wp-content/plugins/timetable/style/style-2bb071db1ada0204cebcb2b71a613e9d.css" as="style" onload="this.onload=null;this.rel='stylesheet'" type="text/css" media="all">
    <link data-minify="1" rel="stylesheet" id="timetable_event_template-css" href="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/cache/min/1/wp-content/plugins/timetable/style/event_template-ccfff7138951055276cab49b81c9da7e.css" as="style" onload="this.onload=null;this.rel='stylesheet'" type="text/css" media="all">
    <!--[if lt IE 9]>
<link   rel='stylesheet' id='vc_lte_ie9-css'  href='https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css' type='text/css' media='screen' />
<![endif]-->
    <link data-minify="1" rel="stylesheet" id="us-theme-css" href="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/cache/min/1/wp-content/uploads/us-assets/nuestravision.tv-4f586b4c505353a67c5b14152d787049.css" as="style" onload="this.onload=null;this.rel='stylesheet'" type="text/css" media="all">
    <link data-minify="1" rel="stylesheet" id="bsf-Defaults-css" href="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/cache/min/1/wp-content/uploads/smile_fonts/Defaults/Defaults-c18edceee1783fbaad1fa95e8fa81222.css" as="style" onload="this.onload=null;this.rel='stylesheet'" type="text/css" media="all">
    <link rel="stylesheet" id="ultimate-style-min-css" href="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/plugins/Ultimate_VC_Addons/assets/min-css/ultimate.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" type="text/css" media="all">
    <script type="text/javascript" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-includes/js/jquery/jquery.js"></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var MPP_PUBLIC_JS = {
            "version": "3.1.6",
            "ajax_url": "https:\/\/nuestravision.tv\/wp-admin\/admin-ajax.php",
            "ajax_nonce": "bf662897a9",
            "plugin_url": "https:\/\/nuestravision.tv\/wp-content\/plugins\/master-popups\/",
            "is_admin": "",
            "debug_mode": "off",
            "debug_ip": "",
            "integrated_services": [],
            "popups_z_index": "99999999",
            "sticky_z_index": "100000005",
            "enable_enqueue_popups": "on",
            "strings": {
                "back_to_form": "Back to form",
                "close_popup": "Close",
                "validation": {
                    "general": "This field is required",
                    "email": "Invalid email address",
                    "checkbox": "This field is required, please check",
                    "dropdown": "This field is required. Please select an option",
                    "min_length": "Min length:"
                }
            }
        }; /* ]]> */
    </script>
    <script type="text/javascript" defer="defer" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/plugins/master-popups/assets/public/js/master-popups.min.js"></script>
    <script type="text/javascript" defer="defer" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/plugins/Ultimate_VC_Addons/assets/min-js/ultimate_bg.min.js"></script>
    <style></style>
    <script type="text/javascript">
        var MPP_POPUP_OPTIONS = {};
        var MPP_POPUP_DISPLAY_OPTIONS = {};
    </script>
    <link rel="https://api.w.org/" href="https://nuestravision.tv/wp-json/">
    <link rel="alternate" type="application/json+oembed" href="https://nuestravision.tv/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fnuestravision.tv%2F">
    <link rel="alternate" type="text/xml+oembed" href="https://nuestravision.tv/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fnuestravision.tv%2F&amp;format=xml">
    <script>
        if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            var root = document.getElementsByTagName('html')[0]
            root.className += " no-touch";
        }
    </script>
    <link rel="apple-touch-icon" sizes="180x180" href="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/apple-touch-icon.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="apple-mobile-web-app-title" content="Nuestra Vision">
    <meta name="application-name" content="Nuestra Vision">
    <meta name="theme-color" content="#ffffff">
    <style>
        h4,
        .widgettitle {
            font-weight: 400px !important
        }

        #pedro-vid .l-section-h {
            padding-bottom: 0px !important
        }

        #pedro-content .l-section-h {
            padding-top: 0px !important
        }

        #nvcontact ::placeholder {
            color: #000;
            opacity: 1
        }

        .pink_contact_form span.wpcf7-not-valid-tip {
            color: #fff
        }
    </style>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/cache/busting/google-tracking/ga-540a077c7c8f90040147f97692128dd7.js', 'ga');
        ga('create', 'UA-64904429-6', 'auto');
        ga('send', 'pageview');
    </script>
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/cache/busting/facebook-tracking/fbpix-events-en_US-2.9.15.js');
        fbq('init', '236975036994063');
        fbq('track', 'PageView');
    </script> <noscript> <img height="1" width="1" src="https://www.facebook.com/tr?id=236975036994063&ev=PageView &noscript=1" /> </noscript>
    <script src="https://js.adsrvr.org/up_loader.1.1.0.js" type="text/javascript" defer=""></script>
    <script type="text/javascript">
        ttd_dom_ready(function() {
            if (typeof TTDUniversalPixelApi === 'function') {
                var universalPixelApi = new TTDUniversalPixelApi();
                universalPixelApi.init("cs0rnrn", ["sav7r7g"], "https://insight.adsrvr.org/track/up");
            }
        });
    </script>
    <link rel="icon" href="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/08/NuestraVision_dashboard_logo_small_050819-e1574092257508.png" sizes="32x32">
    <link rel="icon" href="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/08/NuestraVision_dashboard_logo_small_050819-e1574092257508.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/08/NuestraVision_dashboard_logo_small_050819-e1574092257508.png">
    <meta name="msapplication-TileImage" content="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/08/NuestraVision_dashboard_logo_small_050819-e1574092257508.png">
    <script type="text/javascript">
        function setREVStartSize(t) {
            try {
                var h, e = document.getElementById(t.c).parentNode.offsetWidth;
                if (e = 0 === e || isNaN(e) ? window.innerWidth : e, t.tabw = void 0 === t.tabw ? 0 : parseInt(t.tabw), t.thumbw = void 0 === t.thumbw ? 0 : parseInt(t.thumbw), t.tabh = void 0 === t.tabh ? 0 : parseInt(t.tabh), t.thumbh = void 0 === t.thumbh ? 0 : parseInt(t.thumbh), t.tabhide = void 0 === t.tabhide ? 0 : parseInt(t.tabhide), t.thumbhide = void 0 === t.thumbhide ? 0 : parseInt(t.thumbhide), t.mh = void 0 === t.mh || "" == t.mh || "auto" === t.mh ? 0 : parseInt(t.mh, 0), "fullscreen" === t.layout || "fullscreen" === t.l) h = Math.max(t.mh, window.innerHeight);
                else {
                    for (var i in t.gw = Array.isArray(t.gw) ? t.gw : [t.gw], t.rl) void 0 !== t.gw[i] && 0 !== t.gw[i] || (t.gw[i] = t.gw[i - 1]);
                    for (var i in t.gh = void 0 === t.el || "" === t.el || Array.isArray(t.el) && 0 == t.el.length ? t.gh : t.el, t.gh = Array.isArray(t.gh) ? t.gh : [t.gh], t.rl) void 0 !== t.gh[i] && 0 !== t.gh[i] || (t.gh[i] = t.gh[i - 1]);
                    var r, a = new Array(t.rl.length),
                        n = 0;
                    for (var i in t.tabw = t.tabhide >= e ? 0 : t.tabw, t.thumbw = t.thumbhide >= e ? 0 : t.thumbw, t.tabh = t.tabhide >= e ? 0 : t.tabh, t.thumbh = t.thumbhide >= e ? 0 : t.thumbh, t.rl) a[i] = t.rl[i] < window.innerWidth ? 0 : t.rl[i];
                    for (var i in r = a[0], a) r > a[i] && 0 < a[i] && (r = a[i], n = i);
                    var d = e > t.gw[n] + t.tabw + t.thumbw ? 1 : (e - (t.tabw + t.thumbw)) / t.gw[n];
                    h = t.gh[n] * d + (t.tabh + t.thumbh)
                }
                void 0 === window.rs_init_css && (window.rs_init_css = document.head.appendChild(document.createElement("style"))), document.getElementById(t.c).height = h, window.rs_init_css.innerHTML += "#" + t.c + "_wrapper { height: " + h + "px }"
            } catch (t) {
                console.log("Failure at Presize of Slider:" + t)
            }
        };
    </script>
    <style type="text/css" id="wp-custom-css">
        .no-touch .w-socials-item-popup {
            display: none !important
        }

        html {
            background: #fff
        }

        body {
            background: #fff
        }

        @media screen and (max-width:599px) {
            h1.w-post-elm.post_title.entry-title {
                font-size: 1.5em !important;
                font-weight: 700 !important
            }
        }

        .for_blogpost>.l-section-h {
            padding: 4rem 0 0 0 !important
        }

        @media (min-width:1200px) {
            .l-header:before {
                content: '';
                display: none
            }
        }

        @media (max-width:1199px) and (min-width:813px) {
            .l-header:before {
                content: '';
                display: none
            }
        }

        @media (max-width:812px) {
            .l-header:before {
                content: '';
                display: none
            }
        }

        footer h4 {
            color: #a9a9a9 !important
        }

        .us_custom_e11ab399 {
            padding-top: 5vh
        }
    </style><noscript>
        <style>
            .wpb_animate_when_almost_visible {
                opacity: 1
            }
        </style>
    </noscript>
    <style data-type="us_custom-css">
        #intro h2,
        #intro h4,
        #intro h5 {
            color: #ffffff !important
        }

        @media screen and (max-width:768px) {

            #intro h1,
            #social-main-row h1 {
                color: #ffffff !important
            }
        }

        #asi-somos-row .w-counter-title {
            color: #ffffff !important
        }

        #thumbnail_row img {
            width: 100%
        }

        #thumbnail_row a {
            outline: 0
        }

        span#thumbnail-title {
            margin: 5px 0 10px 0;
            display: block;
            font-size: 15px;
            line-height: 20px
        }

        .w-socials-item-link {
            line-height: 4.5em;
            width: 4.5em
        }

        .w-socials-item.facebook .w-socials-item-link:after,
        .w-socials-item.instagram .w-socials-item-link:after,
        .w-socials-item.twitter .w-socials-item-link:after {
            font-size: 2em
        }

        .heading-img,
        .heading-img-2 {
            color: #d43d67 !important
        }

        .heading-img {
            background: url(https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/04/NV_Pleca-3.png) center no-repeat;
            background-size: cover
        }

        h1.heading-img {
            padding: 50px 0
        }

        .heading-img-2 {
            background: url(https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/04/NV_Pleca-4.png) center no-repeat;
            background-size: cover
        }

        h1.heading-img-2 {
            padding: 35px 0
        }

        #heading-position-2 {
            position: relative;
            top: -100px
        }

        h4,
        .widgettitle {
            font-weight: 400px !important
        }

        #whatsnew {
            font-weight: 700
        }

        #intro .l-section-h {
            padding-bottom: 0;
            padding-top: 0px !important
        }

        .linkwrap {
            display: inline-block
        }

        .blocker {
            position: absolute;
            height: 100%;
            width: 100%;
            z-index: 3;
            top: 0;
            left: 0;
            background: rgba(255, 0, 0, 0)
        }

        .linkwrap iframe {
            z-index: 2
        }

        #availability_text h3,
        #availability_text h4 {
            color: #fff;
            text-align: center;
            padding-bottom: 0.5rem !important
        }

        section#intro {
            padding-bottom: 150px
        }

        #areas_text h5 {
            margin-bottom: -5px
        }

        .regions_col {
            padding: 0
        }

        #regions_col div.vc_column-inner {
            border: 3px solid #fff;
            box-shadow: 1px 1px 10px #00000047;
            margin: 1px
        }

        .territory_green_box {
            background-color: #10d0a3
        }

        .territory_red_box {
            background-color: #da4265
        }

        .territory_purple_box {
            background-color: #d9398d
        }

        .territory_blue_box {
            background-color: #3cafef
        }

        .territory_container_green>div,
        .territory_container_red>div,
        .territory_container_blue>div,
        .territory_container_pink>div {
            transition: all .4s ease-in-out;
            cursor: pointer
        }

        .territory_container_green>div:hover {
            background-color: #0e9a79 !important
        }

        .territory_container_red>div:hover {
            background-color: #a0304a !important
        }

        .territory_container_blue>div:hover {
            background-color: #318fc3 !important
        }

        .territory_container_pink>div:hover {
            background-color: #b32e74 !important
        }

        #headertitle_mobile {
            color: #fff;
            font-size: 30px
        }

        @media screen and (max-width:1024px) {

            h1.heading-img,
            h1.heading-img-2 {
                font-size: 30px
            }

            #heading-position-2 {
                top: -85px
            }

            .w-socials-item-link {
                line-height: 2.5em;
                width: 2.5em
            }

            .w-socials-item.facebook .w-socials-item-link:after,
            .w-socials-item.instagram .w-socials-item-link:after,
            .w-socials-item.twitter .w-socials-item-link:after {
                font-size: 1.5em
            }
        }

        @media screen and (min-width:768px) {
            #mobile-hero-section {
                display: none !important
            }

            #mobile-hero-section.l-section-h {
                padding: 0 !important
            }

            .regions_col {
                width: 90%;
                margin: 0 auto 1rem
            }
        }

        @media screen and (max-width:767px) {
            #hero-section {
                display: none !important
            }

            .territories_container {
                margin: 0 .5em !important
            }
        }

        @media screen and (max-width:1024px) and (min-width:768px) {
            section#intro {
                padding-bottom: 170px
            }
        }

        @media screen and (max-width:768px) and (min-width:641px) {
            section#intro {
                padding-bottom: 140px
            }

            #areas_text h5 {
                font-size: 15px
            }
        }

        @media screen and (max-width:641px) {
            section#intro {
                padding-bottom: 70px
            }

            h1.heading-img,
            h1.heading-img-2 {
                display: none
            }

            h3.subheading {
                font-size: 25px !important
            }
        }
    </style><noscript>
        <style id="rocket-lazyload-nojs-css">
            .rll-youtube-player,
            [data-lazy-src] {
                display: none !important
            }
        </style>
    </noscript>
    <script>
        /*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
        (function(w) {
            "use strict";
            if (!w.loadCSS) {
                w.loadCSS = function() {}
            }
            var rp = loadCSS.relpreload = {};
            rp.support = (function() {
                var ret;
                try {
                    ret = w.document.createElement("link").relList.supports("preload")
                } catch (e) {
                    ret = !1
                }
                return function() {
                    return ret
                }
            })();
            rp.bindMediaToggle = function(link) {
                var finalMedia = link.media || "all";

                function enableStylesheet() {
                    link.media = finalMedia
                }
                if (link.addEventListener) {
                    link.addEventListener("load", enableStylesheet)
                } else if (link.attachEvent) {
                    link.attachEvent("onload", enableStylesheet)
                }
                setTimeout(function() {
                    link.rel = "stylesheet";
                    link.media = "only x"
                });
                setTimeout(enableStylesheet, 3000)
            };
            rp.poly = function() {
                if (rp.support()) {
                    return
                }
                var links = w.document.getElementsByTagName("link");
                for (var i = 0; i < links.length; i++) {
                    var link = links[i];
                    if (link.rel === "preload" && link.getAttribute("as") === "style" && !link.getAttribute("data-loadcss")) {
                        link.setAttribute("data-loadcss", !0);
                        rp.bindMediaToggle(link)
                    }
                }
            };
            if (!rp.support()) {
                rp.poly();
                var run = w.setInterval(rp.poly, 500);
                if (w.addEventListener) {
                    w.addEventListener("load", function() {
                        rp.poly();
                        w.clearInterval(run)
                    })
                } else if (w.attachEvent) {
                    w.attachEvent("onload", function() {
                        rp.poly();
                        w.clearInterval(run)
                    })
                }
            }
            if (typeof exports !== "undefined") {
                exports.loadCSS = loadCSS
            } else {
                w.loadCSS = loadCSS
            }
        }(typeof global !== "undefined" ? global : this))
    </script>
    <style id="us-header-css">
        @media (min-width:1200px) {
            .hidden_for_default {
                display: none !important
            }

            .l-subheader.at_top {
                display: none
            }

            .l-subheader.at_bottom {
                display: none
            }

            .l-header {
                position: relative;
                z-index: 111;
                width: 100%
            }

            .l-subheader {
                margin: 0 auto
            }

            .l-subheader.width_full {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .l-subheader-h {
                display: flex;
                align-items: center;
                position: relative;
                margin: 0 auto;
                height: inherit
            }

            .w-header-show {
                display: none
            }

            .l-header.pos_fixed {
                position: fixed;
                left: 0
            }

            .l-header.pos_fixed:not(.notransition) .l-subheader {
                transition-property: transform, background, box-shadow, line-height, height;
                transition-duration: 0.3s;
                transition-timing-function: cubic-bezier(.78, .13, .15, .86)
            }

            .l-header.bg_transparent:not(.sticky) .l-subheader {
                box-shadow: none !important;
                background: none
            }

            .l-header.bg_transparent~.l-main .l-section.width_full.height_auto:first-child>.l-section-h {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }

            .l-header.pos_static.bg_transparent {
                position: absolute;
                left: 0
            }

            .l-subheader.width_full .l-subheader-h {
                max-width: none !important
            }

            .headerinpos_above .l-header.pos_fixed {
                overflow: hidden;
                transition: transform 0.3s;
                transform: translate3d(0, -100%, 0)
            }

            .headerinpos_above .l-header.pos_fixed.sticky {
                overflow: visible;
                transform: none
            }

            .headerinpos_above .l-header.pos_fixed~.l-section>.l-section-h,
            .headerinpos_above .l-header.pos_fixed~.l-main .l-section:first-of-type>.l-section-h {
                padding-top: 0 !important
            }

            .l-header.shadow_thin .l-subheader.at_middle,
            .l-header.shadow_thin .l-subheader.at_bottom,
            .l-header.shadow_none.sticky .l-subheader.at_middle,
            .l-header.shadow_none.sticky .l-subheader.at_bottom {
                box-shadow: 0 1px 0 rgba(0, 0, 0, .08)
            }

            .l-header.shadow_wide .l-subheader.at_middle,
            .l-header.shadow_wide .l-subheader.at_bottom {
                box-shadow: 0 3px 5px -1px rgba(0, 0, 0, .1), 0 2px 1px -1px rgba(0, 0, 0, .05)
            }

            .headerinpos_bottom .l-header.pos_fixed:not(.sticky) .w-dropdown-list {
                top: auto;
                bottom: -.4em;
                padding-top: .4em;
                padding-bottom: 2.4em
            }

            .header_hor .l-subheader-cell>.w-cart {
                margin-left: 0;
                margin-right: 0
            }

            .l-subheader.at_top {
                line-height: 40px;
                height: 40px
            }

            .l-header.sticky .l-subheader.at_top {
                line-height: 40px;
                height: 40px
            }

            .l-subheader.at_middle {
                line-height: 60px;
                height: 60px
            }

            .l-header.sticky .l-subheader.at_middle {
                line-height: 60px;
                height: 60px
            }

            .l-subheader.at_bottom {
                line-height: 50px;
                height: 50px
            }

            .l-header.sticky .l-subheader.at_bottom {
                line-height: 50px;
                height: 50px
            }

            .l-subheader.with_centering .l-subheader-cell.at_left,
            .l-subheader.with_centering .l-subheader-cell.at_right {
                flex-basis: 100px
            }

            .l-header.pos_fixed~.l-main>.l-section:first-of-type>.l-section-h,
            .headerinpos_below .l-header.pos_fixed~.l-main>.l-section:nth-of-type(2)>.l-section-h,
            .l-header.pos_static.bg_transparent~.l-main>.l-section:first-of-type>.l-section-h {
                padding-top: 60px
            }

            .headerinpos_bottom .l-header.pos_fixed~.l-main>.l-section:first-of-type>.l-section-h {
                padding-bottom: 60px
            }

            .l-header.bg_transparent~.l-main .l-section.valign_center:first-of-type>.l-section-h {
                top: -30px
            }

            .headerinpos_bottom .l-header.pos_fixed.bg_transparent~.l-main .l-section.valign_center:first-of-type>.l-section-h {
                top: 30px
            }

            .menu-item-object-us_page_block {
                max-height: calc(100vh - 60px)
            }

            .l-header.pos_fixed~.l-main .l-section.height_full:not(:first-of-type) {
                min-height: calc(100vh - 60px)
            }

            .admin-bar .l-header.pos_fixed~.l-main .l-section.height_full:not(:first-of-type) {
                min-height: calc(100vh - 92px)
            }

            .l-header.pos_static.bg_solid~.l-main .l-section.height_full:first-of-type {
                min-height: calc(100vh - 60px)
            }

            .l-header:before {
                content: '60'
            }

            .l-header.pos_fixed~.l-main .l-section.type_sticky {
                top: 60px
            }

            .admin-bar .l-header.pos_fixed~.l-main .l-section.type_sticky {
                top: 92px
            }

            .l-header.pos_fixed.sticky~.l-main .l-section.type_sticky:first-of-type>.l-section-h {
                padding-top: 60px
            }

            .l-header.pos_fixed~.l-main .vc_column-inner.type_sticky>.wpb_wrapper {
                top: calc(60px + 4rem)
            }

            .l-header.pos_fixed~.l-main .woocommerce .cart-collaterals,
            .l-header.pos_fixed~.l-main .woocommerce-checkout #order_review {
                top: 60px
            }

            .headerinpos_below .l-header.pos_fixed:not(.sticky) {
                position: absolute;
                top: 100%
            }

            .headerinpos_bottom .l-header.pos_fixed:not(.sticky) {
                position: absolute;
                bottom: 0
            }

            .headerinpos_below .l-header.pos_fixed~.l-main>.l-section:first-of-type>.l-section-h,
            .headerinpos_bottom .l-header.pos_fixed~.l-main>.l-section:first-of-type>.l-section-h {
                padding-top: 0 !important
            }

            .headerinpos_below .l-header.pos_fixed~.l-main .l-section.height_full:nth-of-type(2) {
                min-height: 100vh
            }

            .admin-bar.headerinpos_below .l-header.pos_fixed~.l-main .l-section.height_full:nth-of-type(2) {
                min-height: calc(100vh - 32px)
            }

            .headerinpos_bottom .l-header.pos_fixed:not(.sticky) .w-cart-dropdown,
            .headerinpos_bottom .l-header.pos_fixed:not(.sticky) .w-nav.type_desktop .w-nav-list.level_2 {
                bottom: 100%;
                transform-origin: 0 100%
            }

            .headerinpos_bottom .l-header.pos_fixed:not(.sticky) .w-nav.type_mobile.m_layout_dropdown .w-nav-list.level_1 {
                top: auto;
                bottom: 100%;
                box-shadow: 0 -3px 3px rgba(0, 0, 0, .1)
            }

            .headerinpos_bottom .l-header.pos_fixed:not(.sticky) .w-nav.type_desktop .w-nav-list.level_3,
            .headerinpos_bottom .l-header.pos_fixed:not(.sticky) .w-nav.type_desktop .w-nav-list.level_4 {
                top: auto;
                bottom: 0;
                transform-origin: 0 100%
            }
        }

        @media (min-width:813px) and (max-width:1199px) {
            .hidden_for_tablets {
                display: none !important
            }

            .l-subheader.at_top {
                display: none
            }

            .l-subheader.at_bottom {
                display: none
            }

            .l-header {
                position: relative;
                z-index: 111;
                width: 100%
            }

            .l-subheader {
                margin: 0 auto
            }

            .l-subheader.width_full {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .l-subheader-h {
                display: flex;
                align-items: center;
                position: relative;
                margin: 0 auto;
                height: inherit
            }

            .w-header-show {
                display: none
            }

            .l-header.pos_fixed {
                position: fixed;
                left: 0
            }

            .l-header.pos_fixed:not(.notransition) .l-subheader {
                transition-property: transform, background, box-shadow, line-height, height;
                transition-duration: 0.3s;
                transition-timing-function: cubic-bezier(.78, .13, .15, .86)
            }

            .l-header.bg_transparent:not(.sticky) .l-subheader {
                box-shadow: none !important;
                background: none
            }

            .l-header.bg_transparent~.l-main .l-section.width_full.height_auto:first-child>.l-section-h {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }

            .l-header.pos_static.bg_transparent {
                position: absolute;
                left: 0
            }

            .l-subheader.width_full .l-subheader-h {
                max-width: none !important
            }

            .headerinpos_above .l-header.pos_fixed {
                overflow: hidden;
                transition: transform 0.3s;
                transform: translate3d(0, -100%, 0)
            }

            .headerinpos_above .l-header.pos_fixed.sticky {
                overflow: visible;
                transform: none
            }

            .headerinpos_above .l-header.pos_fixed~.l-section>.l-section-h,
            .headerinpos_above .l-header.pos_fixed~.l-main .l-section:first-of-type>.l-section-h {
                padding-top: 0 !important
            }

            .l-header.shadow_thin .l-subheader.at_middle,
            .l-header.shadow_thin .l-subheader.at_bottom,
            .l-header.shadow_none.sticky .l-subheader.at_middle,
            .l-header.shadow_none.sticky .l-subheader.at_bottom {
                box-shadow: 0 1px 0 rgba(0, 0, 0, .08)
            }

            .l-header.shadow_wide .l-subheader.at_middle,
            .l-header.shadow_wide .l-subheader.at_bottom {
                box-shadow: 0 3px 5px -1px rgba(0, 0, 0, .1), 0 2px 1px -1px rgba(0, 0, 0, .05)
            }

            .headerinpos_bottom .l-header.pos_fixed:not(.sticky) .w-dropdown-list {
                top: auto;
                bottom: -.4em;
                padding-top: .4em;
                padding-bottom: 2.4em
            }

            .header_hor .l-subheader-cell>.w-cart {
                margin-left: 0;
                margin-right: 0
            }

            .l-subheader.at_top {
                line-height: 40px;
                height: 40px
            }

            .l-header.sticky .l-subheader.at_top {
                line-height: 40px;
                height: 40px
            }

            .l-subheader.at_middle {
                line-height: 80px;
                height: 80px
            }

            .l-header.sticky .l-subheader.at_middle {
                line-height: 60px;
                height: 60px
            }

            .l-subheader.at_bottom {
                line-height: 50px;
                height: 50px
            }

            .l-header.sticky .l-subheader.at_bottom {
                line-height: 50px;
                height: 50px
            }

            .l-subheader.with_centering_tablets .l-subheader-cell.at_left,
            .l-subheader.with_centering_tablets .l-subheader-cell.at_right {
                flex-basis: 100px
            }

            .l-header.pos_fixed~.l-main>.l-section:first-of-type>.l-section-h,
            .headerinpos_below .l-header.pos_fixed~.l-main>.l-section:nth-of-type(2)>.l-section-h,
            .l-header.pos_static.bg_transparent~.l-main>.l-section:first-of-type>.l-section-h {
                padding-top: 80px
            }

            .l-header.pos_fixed~.l-main .l-section.type_sticky {
                top: 60px
            }

            .admin-bar .l-header.pos_fixed~.l-main .l-section.type_sticky {
                top: 92px
            }

            .l-header.pos_fixed.sticky~.l-main .l-section.type_sticky:first-of-type>.l-section-h {
                padding-top: 60px
            }

            .l-header:before {
                content: '60'
            }
        }

        @media (max-width:812px) {
            .hidden_for_mobiles {
                display: none !important
            }

            .l-subheader.at_top {
                display: none
            }

            .l-subheader.at_bottom {
                display: none
            }

            .l-header {
                position: relative;
                z-index: 111;
                width: 100%
            }

            .l-subheader {
                margin: 0 auto
            }

            .l-subheader.width_full {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .l-subheader-h {
                display: flex;
                align-items: center;
                position: relative;
                margin: 0 auto;
                height: inherit
            }

            .w-header-show {
                display: none
            }

            .l-header.pos_fixed {
                position: fixed;
                left: 0
            }

            .l-header.pos_fixed:not(.notransition) .l-subheader {
                transition-property: transform, background, box-shadow, line-height, height;
                transition-duration: 0.3s;
                transition-timing-function: cubic-bezier(.78, .13, .15, .86)
            }

            .l-header.bg_transparent:not(.sticky) .l-subheader {
                box-shadow: none !important;
                background: none
            }

            .l-header.bg_transparent~.l-main .l-section.width_full.height_auto:first-child>.l-section-h {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }

            .l-header.pos_static.bg_transparent {
                position: absolute;
                left: 0
            }

            .l-subheader.width_full .l-subheader-h {
                max-width: none !important
            }

            .headerinpos_above .l-header.pos_fixed {
                overflow: hidden;
                transition: transform 0.3s;
                transform: translate3d(0, -100%, 0)
            }

            .headerinpos_above .l-header.pos_fixed.sticky {
                overflow: visible;
                transform: none
            }

            .headerinpos_above .l-header.pos_fixed~.l-section>.l-section-h,
            .headerinpos_above .l-header.pos_fixed~.l-main .l-section:first-of-type>.l-section-h {
                padding-top: 0 !important
            }

            .l-header.shadow_thin .l-subheader.at_middle,
            .l-header.shadow_thin .l-subheader.at_bottom,
            .l-header.shadow_none.sticky .l-subheader.at_middle,
            .l-header.shadow_none.sticky .l-subheader.at_bottom {
                box-shadow: 0 1px 0 rgba(0, 0, 0, .08)
            }

            .l-header.shadow_wide .l-subheader.at_middle,
            .l-header.shadow_wide .l-subheader.at_bottom {
                box-shadow: 0 3px 5px -1px rgba(0, 0, 0, .1), 0 2px 1px -1px rgba(0, 0, 0, .05)
            }

            .headerinpos_bottom .l-header.pos_fixed:not(.sticky) .w-dropdown-list {
                top: auto;
                bottom: -.4em;
                padding-top: .4em;
                padding-bottom: 2.4em
            }

            .header_hor .l-subheader-cell>.w-cart {
                margin-left: 0;
                margin-right: 0
            }

            .l-subheader.at_top {
                line-height: 40px;
                height: 40px
            }

            .l-header.sticky .l-subheader.at_top {
                line-height: 40px;
                height: 40px
            }

            .l-subheader.at_middle {
                line-height: 50px;
                height: 50px
            }

            .l-header.sticky .l-subheader.at_middle {
                line-height: 50px;
                height: 50px
            }

            .l-subheader.at_bottom {
                line-height: 50px;
                height: 50px
            }

            .l-header.sticky .l-subheader.at_bottom {
                line-height: 50px;
                height: 50px
            }

            .l-subheader.with_centering_mobiles .l-subheader-cell.at_left,
            .l-subheader.with_centering_mobiles .l-subheader-cell.at_right {
                flex-basis: 100px
            }

            .l-header.pos_fixed~.l-main>.l-section:first-of-type>.l-section-h,
            .headerinpos_below .l-header.pos_fixed~.l-main>.l-section:nth-of-type(2)>.l-section-h,
            .l-header.pos_static.bg_transparent~.l-main>.l-section:first-of-type>.l-section-h {
                padding-top: 50px
            }

            .l-header.pos_fixed~.l-main .l-section.type_sticky {
                top: 50px
            }

            .l-header.pos_fixed.sticky~.l-main .l-section.type_sticky:first-of-type>.l-section-h {
                padding-top: 50px
            }

            .l-header:before {
                content: '50'
            }
        }

        @media (min-width:1200px) {
            .ush_image_1 {
                height: 35px !important
            }

            .l-header.sticky .ush_image_1 {
                height: 30px !important
            }
        }

        @media (min-width:813px) and (max-width:1199px) {
            .ush_image_1 {
                height: 30px !important
            }

            .l-header.sticky .ush_image_1 {
                height: 30px !important
            }
        }

        @media (max-width:812px) {
            .ush_image_1 {
                height: 30px !important
            }

            .l-header.sticky .ush_image_1 {
                height: 30px !important
            }
        }

        .header_hor .ush_menu_1.type_desktop .w-nav-list.level_1>.menu-item>a {
            padding-left: 20px;
            padding-right: 20px
        }

        .header_ver .ush_menu_1.type_desktop .w-nav-list.level_1>.menu-item>a {
            padding-top: 20px;
            padding-bottom: 20px
        }

        .ush_menu_1.type_desktop .menu-item:not(.level_1) {
            font-size: 14px
        }

        .ush_menu_1.type_mobile .w-nav-anchor.level_1 {
            font-size: 16px
        }

        .ush_menu_1.type_mobile .w-nav-anchor:not(.level_1) {
            font-size: 14px
        }

        @media (min-width:1200px) {
            .ush_menu_1 .w-nav-icon {
                font-size: 20px
            }
        }

        @media (min-width:813px) and (max-width:1199px) {
            .ush_menu_1 .w-nav-icon {
                font-size: 20px
            }
        }

        @media (max-width:812px) {
            .ush_menu_1 .w-nav-icon {
                font-size: 20px
            }
        }

        .ush_menu_1 .w-nav-icon i {
            border-width: 3px
        }

        @media screen and (max-width:799px) {
            .w-nav.ush_menu_1>.w-nav-list.level_1 {
                display: none
            }

            .ush_menu_1 .w-nav-control {
                display: block
            }
        }

        .ush_image_1 {
            padding-left: 60px !important
        }

        .ush_menu_1 {
            padding-right: 60px !important;
            font-family: 'Lato', sans-serif !important;
            font-size: 14px !important;
            font-weight: 700 !important
        }

        @media (min-width:813px) and (max-width:1199px) {
            .ush_image_1 {
                margin-right: 0px !important;
                padding-left: 0 !important
            }

            .ush_menu_1 {
                padding-right: 0 !important
            }
        }

        @media (max-width:812px) {
            .ush_image_1 {
                margin-right: 0px !important;
                padding-left: 0 !important
            }

            .ush_menu_1 {
                padding-right: 0 !important
            }
        }
    </style>
    <style>
        .w-nav-list .level_2 {
            margin-top: 12px
        }

        .w-nav-list .level_2 li:hover a {
            color: #fff !important
        }

        .l-header.bg_transparent:not(.sticky) .l-subheader .alternate-menu {
            color: #fff
        }

        #timetable-app.tt_upcoming_events li {
            width: 100% !important
        }

        @media screen and (min-width:813px) {
            #timetable-app {
                width: 400px;
                margin: 0 auto
            }

            #timetable-app .tt_upcoming_events.clearfix.autoscroll-0 {
                width: 100% !important
            }
        }

        @media screen and (max-width:812px) {
            #timetable-app .tt_upcoming_events.clearfix.autoscroll-0 {
                width: 100% !important
            }
        }

        @media screen and (max-width:813px)and (orientation:landscape) {
            #timetable-app .tt_upcoming_events li {
                width: 100% !important
            }
        }

        @media screen and (max-width:1009px) {
            .tt_upcoming_events li {
                width: 100% !important
            }
        }

        body {
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        @media screen and (-webkit-min-device-pixel-ratio:0) {
            html {
                font-size: 15px
            }

            .wpcf7 .wpcf7-date {
                text-indent: 30px !important;
                padding-left: 0px !important
            }

            .wpcf7-form-control-wrap input[type="date"] {
                min-width: 95%
            }
        }

        @-moz-document url-prefix() {
            body {
                font-weight: 400 !important
            }

            .wpcf7 .wpcf7-text,
            .wpcf7 .wpcf7-textarea {
                text-indent: 40px !important
            }

            .wpcf7 .wpcf7-date {
                text-indent: 40px !important
            }

            .wpcf7 .genderSel {
                text-indent: 20px !important
            }

            @media all and (max-width:768px) {

                .wpcf7 .wpcf7-text,
                .wpcf7 .wpcf7-textarea {
                    text-indent: 25px !important
                }

                .wpcf7 .wpcf7-date {
                    text-indent: 25px !important
                }
            }
        }

        @media screen and (-webkit-min-device-pixel-ratio:0) and (min-resolution:.001dpcm) {
            @media all and (max-width:768px) {
                .wpcf7 .genderSel {
                    text-indent: 15px !important
                }
            }
        }

        h2 {
            font-weight: 400 !important
        }

        .lp-video-container {
            padding-left: 30px;
            padding-right: 30px
        }

        .tt_event_theme_page {
            width: 70%;
            background: #FFF;
            padding: 60px;
            margin: 100px auto 30px
        }

        .hero_modal_btn .btn-modal-lg {
            font-size: 25px;
            font-weight: 700
        }

        body {
            -webkit-tap-highlight-color: rgba(245, 245, 245, .14) !important
        }

        a {
            cursor: pointer
        }

        h1.w-post-elm.post_title.entry-title {
            text-align: center;
            Font-size: 2.2em;
            font-weight: 700
        }

        .w-separator-h {
            display: none !important
        }

        .w-sharing {
            text-align: center !important
        }

        .center_post_vids {
            text-align: center
        }

        #header-black {
            color: #000 !important
        }

        .w-contacts-item:before {
            box-shadow: none !important
        }

        h5.box_header {
            font-weight: bold !important
        }

        .w-counter-number {
            font-weight: 500 !important
        }

        h3.w-counter-title {
            font-weight: 400 !important
        }

        .bottom-img {
            z-index: 0;
            margin-top: -45px !important
        }

        .ihc-strength {
            display: none
        }

        @media screen and (max-width:411px) {
            .bottom-img {
                z-index: 0;
                margin-top: 20px !important
            }
        }

        .ihc-login-template-2 .impu-form-links {
            text-align: left !important
        }

        @media screen and (max-width:479px) {
            h5.box_header {
                font-weight: bold !important
            }
        }

        .section.remove-details {
            display: none !important
        }

        .single_add_to_cart_button,
        button[name=apply_coupon],
        button[name=update_cart],
        button[name=woocommerce_checkout_place_order],
        .checkout-button {
            background: #ee2d63 !important
        }

        input[name=coupon_code] {
            border: 1px solid #efefef
        }

        .contact-paragraph p,
        .contact-text,
        .contact-text a {
            font-weight: 600 !important
        }

        div.wpcf7-mail-sent-ok {
            background: #e0e635;
            color: #000;
            border: 2px solid #dce234 !important
        }

        .comment-form textarea {
            border: 1px solid #a9a9a9 !important
        }

        .light_contact_form .wpcf7-not-valid-tip {
            color: #000000 !important
        }

        div.wpcf7-validation-errors,
        div.wpcf7-acceptance-missing,
        span.wpcf7-not-valid-tip {
            background-color: #fff;
            border: 1px solid #f00 !important;
            padding: 5px 8px;
            border-radius: 5px;
            color: #000 !important;
            webkit-transition: all 0.6s linear 0s;
            -moz-transition: all 0.6s linear 0s;
            -ms-transition: all 0.6s linear 0s;
            -o-transition: all 0.6s linear 0s;
            transition: all 0.6s linear 0s;
            -webkit-animation: fadeIn 1s;
            animation: fadeIn 1s
        }

        div.wpcf7-spam-blocked {
            border: 1px solid #f00 !important;
            color: #000 !important
        }

        span.wpcf7-not-valid-tip {
            margin: 10px 0;
            font-size: .875rem !important;
            text-align: center
        }

        div.wpcf7-response-output {
            font-size: .875rem !important
        }

        #support_contact .wpcf7-form .wpcf7-submit {
            background: #e72666 !important;
            color: #fff
        }

        .wpcf7-form .wpcf7-submit {
            background: #fff;
            color: #000
        }

        .wpcf7 .wpcf7-text,
        .wpcf7 .wpcf7-textarea,
        .wpcf7 .wpcf7-select {
            border: 1px solid #efefef
        }

        .wpcf7-form .wpcf7-submit:hover {
            color: #fff
        }

        .wpcf7 .wpcf7-text,
        .wpcf7 .wpcf7-textarea {
            text-indent: 20px;
            padding-left: 30px
        }

        .wpcf7 .wpcf7-text#normal-input {
            text-indent: 0;
            padding-left: 10px
        }

        .wpcf7 .wpcf7-select#model-type {
            text-indent: 40px
        }

        .wpcf7 .wpcf7-date {
            text-indent: 20px;
            padding-left: 30px
        }

        .wpcf7 .genderSel {
            text-indent: 45px;
            padding-left: 30px
        }

        .wpcf7 p {
            position: relative
        }

        .wpcf7 p .fa,
        .wpcf7 p .fas {
            position: absolute;
            color: #000;
            z-index: 100;
            font-size: 1.3rem;
            top: 1rem;
            left: 3%
        }

        div.wpcf7-spam-blocked {
            border: 2px solid red;
            background: #fff
        }

        .release-form .wpcf7 .wpcf7-text,
        .release-form .wpcf7 .wpcf7-textarea {
            text-indent: 0px !important;
            border: 1px solid #efefef;
            width: 50%
        }

        .release-form img {
            width: 250px
        }

        .release-form #image-container {
            margin: 0 auto;
            width: 200px
        }

        .release-form .wpcf7-form .wpcf7-submit {
            background: #EE2D63;
            color: #fff
        }

        .release-form .wpcf7-not-valid-tip {
            color: #ef2e62 !important;
            margin-top: 10px
        }

        .release-form div.wpcf7-validation-errors,
        .release-form div.wpcf7-acceptance-missing {
            color: #fff;
            background: #ef2e62;
            border: 2px solid #ef2e62 !important
        }

        @media screen and (max-width:768px) {

            .release-form .wpcf7 .wpcf7-text,
            .release-form .wpcf7 .wpcf7-textarea {
                width: 100% !important
            }

            .wpcf7 .genderSel {
                text-indent: 30px
            }

            .wpcf7 .wpcf7-select#model-type {
                text-indent: 30px
            }
        }

        .ihc-register-6 .ihc-register-notice:before,
        .ihc-login-notice:before {
            content: none !important
        }

        .ihc-register-6 .ihc-register-notice,
        .ihc-login-notice {
            position: initial !important;
            margin-top: 5px;
            background-color: #fff;
            border: 1px solid #f00 !important;
            padding: 5px 8px;
            border-radius: 3px;
            max-width: 100%;
            color: #000 !important
        }

        @media screen and (max-width:321px) {
            div#ihc_radio_parent_173 {
                display: inline-block !important
            }

            .tt_upcoming_events li {
                width: 100%
            }

            .w-blogpost-preview img {
                width: 40% !important;
                margin: 0 auto !important
            }

            .w-blogpost-preview {
                display: none
            }

            .single_job_listing .company img {
                width: 2em !important;
                height: 2em !important
            }

            input.application_button.button,
            input.button.wp_job_manager_send_application_button {
                background-color: #e72666;
                color: #fff
            }

            .single_job_listing .company {
                border: 0;
                border-bottom: 1px solid #e72666;
                box-shadow: none !important
            }

            @media only screen and (max-width:361px) {
                .ihc-ap-menu {
                    margin-top: 14px !important
                }

                .ihc-mobile-bttn {
                    float: none !important
                }
            }

            @media all and (min-width:768px) and (max-width:1280px) and (orientation:portrait) {

                .modules h2,
                .modules h3 {
                    font-size: 29px !important
                }

                .program_btn a button,
                .program_btn #phone {
                    font-size: 13px !important
                }
            }

            @media all and (max-width:812px) and (min-width:375px) and (orientation:landscape) {

                .program_btn a button,
                .program_btn #phone {
                    font-size: 10px !important
                }
            }

            @media all and (max-width:736px) and (min-width:414px) and (orientation:landscape) {

                .program_btn a button,
                .program_btn #phone {
                    font-size: 22px !important
                }
            }

            #date-image {
                margin-top: -170px;
                padding-left: 10px;
                margin-left: 20px
            }

            @media all and (max-width:770px) {
                #date-image .w-image-h img {
                    display: none !important
                }
            }

            @media screen and (max-width:770px) {
                .ihc-register-col>.ihc-register-notice {
                    margin-top: 0px !important;
                    left: 45%
                }
            }
    </style>
    <style id="us-design-options-css">
        .us_custom_6df4bc3a {
            color: #ffffff !important
        }

        .us_custom_6c9a0c76 {
            font-size: 17px !important
        }

        .us_custom_910371cc {
            padding-top: 100px !important;
            color: #ffffff !important
        }

        .us_custom_be3606da {
            padding-right: 0px !important;
            padding-left: 0px !important
        }

        .us_custom_72fc42ef {
            margin-top: 50px !important
        }

        .us_custom_8c42ed40 {
            padding-top: 10px !important
        }

        .us_custom_dcf82f55 {
            font-size: 22 !important
        }

        .us_custom_f4e98152 {
            padding-right: 10px !important;
            padding-left: 10px !important
        }

        .us_custom_33fe73d0 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important
        }

        .us_custom_4edece6e {
            margin-top: 0px !important;
            padding-top: 0px !important
        }

        .us_custom_4fb9e5a3 {
            background: #ffffff !important
        }

        .us_custom_0490361b {
            margin-bottom: 0px !important
        }

        .us_custom_0f8f44b7 {
            margin-top: 20px !important
        }

        .us_custom_bf2881af {
            margin-top: 0px !important;
            margin-bottom: 20px !important;
            padding-top: 0px !important
        }

        .us_custom_d5e12834 {
            color: #d43d67 !important
        }

        .us_custom_319574bd {
            padding-right: 25px !important;
            padding-left: 25px !important
        }

        .us_custom_83615c4e {
            padding-top: 10px !important;
            padding-bottom: 50px !important
        }

        .us_custom_1ba3d2bf {
            margin-bottom: 20px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important
        }

        .us_custom_d8bb8f6f {
            font-size: 50px !important
        }

        .us_custom_457f5000 {
            margin-bottom: 20px !important;
            padding: 0 50px 0 50px !important
        }

        .us_custom_43d836d8 {
            padding-top: 10px !important;
            padding-bottom: 10px !important
        }

        .us_custom_fa568d0f {
            margin-bottom: 20px !important;
            padding: 0px !important
        }

        .us_custom_785e50b2 {
            font-size: 30px !important
        }

        .us_custom_8d45c27c {
            padding-top: 0px !important;
            padding-bottom: 0px !important
        }

        .us_custom_26d40d9c {
            font-family: 'Lato', sans-serif !important;
            font-size: 6rem !important
        }

        .us_custom_d8ca1d4e {
            padding: 0 50px 0 50px !important
        }

        .us_custom_e66d670a {
            font-family: 'Lato', sans-serif !important;
            font-size: 2rem !important
        }

        .us_custom_84f29354 {
            font-size: 24 px !important
        }

        .us_custom_55bd4426 {
            color: #a9a9a9 !important;
            background: #000000 !important
        }

        .us_custom_49f317a8 {
            font-size: 22px !important
        }
    </style>
    <style type="text/css">
        :root topadblock,
        :root script[src^="http://free-shoutbox.net/app/webroot/shoutbox/sb.php?shoutbox="]+#freeshoutbox_content,
        :root input[onclick^="window.open('http://www.FriendlyDuck.com/"],
        :root img[alt^="Fuckbook"],
        :root iframe[src^="http://static.mozo.com.au/strips/"],
        :root iframe[id^="google_ads_iframe"],
        :root header#hdr+#main>div[data-hveid],
        :root a[onclick*="//m.economictimes.com/etmack/click.htm"],
        :root div[role="navigation"]+c-wiz>script+div>.kxhcC,
        :root div[id^="traffective-ad-"],
        :root div[id^="mainads"],
        :root div[id^="dmRosAdWrapper"],
        :root a[href^="http://at.atwola.com/"],
        :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"]+.ob_source,
        :root div[id^="div-ads-"],
        :root a[data-obtrack^="http://paid.outbrain.com/network/redir?"],
        :root a[href^="http://www1.clickdownloader.com/"],
        :root div[id^="cns_ads_"],
        :root div[id^="advt-"],
        :root a[href^="http://www.myfreecams.com/?co_id="][href*="&track="],
        :root div[id^="advads-"],
        :root #\5f _admvnlb_modal_container,
        :root div[id^="adspot-"],
        :root a[href^="https://trust.zone/go/r.php?RID="],
        :root div[id^="tms-ad-dfp-"],
        :root input[onclick^="window.open('http://www.friendlyduck.com/"],
        :root div[id^="ads300_250-widget"],
        :root div[id^="ads250_250-widget"],
        :root div[id^="ads120_600-widget"],
        :root div[id^="adrotate_widgets-"],
        :root div[id^="adfox_"],
        :root div[id^="ad_script_"],
        :root div[id^="ad_rect_"],
        :root #content>#right>.dose>.dosesingle,
        :root div[id^="ad_bigbox_"],
        :root div[id^="ad-server-"],
        :root div[id^="acm-ad-tag-"],
        :root div[id^="ADV-SLOT-"],
        :root div[data-native_ad],
        :root a[href^=" http://n47adshostnet.com/"],
        :root div[data-id^="CarouselPLA-"]>.kzwEHf,
        :root div[class^="proadszone-"],
        :root div[class^="pane-google-admanager-"],
        :root a[href^="http://adultgames.xxx/"],
        :root a[href^="http://semi-cod.com/clicks/"],
        :root div[class^="index_displayAd_"],
        :root a[href^="http://www.affbuzzads.com/affiliate/"],
        :root div[class^="index_adBeforeContent_"],
        :root div[class^="index_adAfterContent_"],
        :root a[href^="http://dwn.pushtraffic.net/"],
        :root div[class^="hp-ad-rect-"],
        :root div[class^="block-openx-"],
        :root div[class^="ads-partner-"],
        :root div[class^="ad_border_"],
        :root a[href^="http://adprovider.adlure.net/"],
        :root div[class^="Ad__container"],
        :root div[id^="div-adtech-ad-"],
        :root div[class*="_AdInArticle_"],
        :root div[class^="ad_position_"],
        :root a[href^="http://www.afco2go.com/srv.php?"],
        :root div[aria-label="Ads"],
        :root div>[class][onclick*=".updateAnalyticsEvents"],
        :root bottomadblock,
        :root a[href^="https://watchmygirlfriend.tv/"],
        :root aside[itemtype="https://schema.org/WPAdBlock"],
        :root a[href^="http://c.actiondesk.com/"],
        :root aside[id^="div-gpt-ad"],
        :root div[id^="ad-cid-"],
        :root a[href^="http://lp.ezdownloadpro.info/"],
        :root a[href^="http://uploaded.net/ref/"],
        :root aside[id^="advads_ad_widget-"],
        :root aside[id^="adrotate_widgets-"],
        :root [id*="MGWrap"],
        :root ad-desktop-sidebar,
        :root a[style="display:block;width:300px;min-height:250px"][href^="http://li.cnet.com/click?"],
        :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"]+.ob_source,
        :root a[href^="http://popup.taboola.com/"],
        :root a[href^="//adbit.co/?a=Advertise&"],
        :root a[onmousedown^="this.href='/wp-content/embed-ad-content/"],
        :root div[class^="AdhesionAd_"],
        :root div[class^="Ad__bigBox"],
        :root a[href^="https://www.what-sexdating.com/"],
        :root a[href^="https://www.travelzoo.com/oascampaignclick/"],
        :root a[href^="https://www.share-online.biz/affiliate/"],
        :root a[href^="https://www.securegfm.com/"],
        :root a[href^="http://adserver.adtech.de/"],
        :root a[href^="https://www.mrskin.com/tour"],
        :root div[id^="advads_"],
        :root a[href^="https://www.moscarossa.biz/"],
        :root a[href^="https://www.goldenfrog.com/vyprvpn?offer_id="][href*="&aff_id="],
        :root .trc_related_container div[data-item-syndicated="true"],
        :root a[href^="https://www.firstload.com/affiliate/"],
        :root a[href^="https://www.clicktraceclick.com/"],
        :root a[href^="https://www.camyou.com/?cam="][href*="&track="],
        :root a[href^="https://www.bebi.com"],
        :root a[href^="https://www.adskeeper.co.uk/"],
        :root a[href^="http://pan.adraccoon.com?"],
        :root div[id^="ad-gpt-"],
        :root a[href^="http://farm.plista.com/pets"],
        :root a[href^="https://windscribe.com/promo/"],
        :root a[href^="http://ad-emea.doubleclick.net/"],
        :root a[href^="https://understandsolar.com/signup/?lead_source="][href*="&tracking_code="],
        :root a[href^="https://track.adform.net/"],
        :root a[href^="https://traffic.bannerator.com/"],
        :root a[href^="https://tracking.truthfinder.com/?a="],
        :root a[href^="https://www.adultempire.com/"][href*="?partner_id="],
        :root a[href^="https://track.healthtrader.com/"],
        :root a[href^="https://track.clickmoi.xyz/"],
        :root a[href^="https://track.afftck.com/"],
        :root a[href^="https://control.trafficfabrik.com/"],
        :root a[href^="https://track.52zxzh.com/"],
        :root div[class^="gemini-ad"],
        :root a[href^="http://pwrads.net/"],
        :root a[href^="//oardilin.com/"],
        :root a[href^="https://torguard.net/aff.php"],
        :root a[href^="http://tour.affbuzzads.com/"],
        :root a[href^="https://tc.tradetracker.net/"],
        :root a[href^="https://t.mobtya.com/"],
        :root div[id^="ad_head_celtra_"],
        :root a[href^="https://t.grtyi.com/"],
        :root aside[id^="tn_ads_widget-"],
        :root a[href^="https://syndication.exoclick.com/splash.php?"],
        :root div[id^="YFBMSN"],
        :root div[id^="ad-div-"],
        :root a[href^="https://secure.eveonline.com/ft/?aid="],
        :root a[href^="https://secure.bstlnk.com/"],
        :root div[id^="zergnet-widget"],
        :root a[href^="https://rev.adsession.com/"],
        :root a[href^="https://retiremely.com/"],
        :root a[href^="http://y1jxiqds7v.com/"],
        :root a[href^="https://www.hotgirls4fuck.com/"],
        :root div[id^="yandex_ad"],
        :root a[href^="https://www.pornhat.com/"][rel="nofollow"],
        :root AD-SLOT,
        :root a[href^="https://pubads.g.doubleclick.net/"],
        :root a[href^="https://prf.hn/click/"][href*="/adref:"],
        :root #rhs_block .mod>.gws-local-hotels__booking-module,
        :root a[href^="http://www.my-dirty-hobby.com/?sub="],
        :root a[href^="https://porndeals.com/?track="],
        :root a[href^="https://mk-cdn.net/"],
        :root div[id^="proadszone-"],
        :root a[href^="https://mk-ads.com/"],
        :root a[href^="https://jmp.awempire.com/"],
        :root a[href^="https://members.linkifier.com/public/affiliateLanding?refCode="],
        :root a[href^="https://medleyads.com/"],
        :root div[id^="ads300_100-widget"],
        :root a[href^="https://click.plista.com/pets"],
        :root a[href^="https://lingthatsparleso.info/"],
        :root a[href*=".approvallamp.club/"],
        :root a[href^="https://landing1.brazzersnetwork.com"],
        :root a[href^="https://land.rk.com/landing/"],
        :root .lads[width="100%"][style="background:#FFF8DD"],
        :root a[href^="https://land.brazzersnetwork.com/landing/"],
        :root a[href^="https://incisivetrk.cvtr.io/click?"],
        :root a[href^="https://iactrivago.ampxdirect.com/"],
        :root a[href^="http://www.usearchmedia.com/signup?"],
        :root a[onmousedown^="this.href='http://staffpicks.outbrain.com/network/redir?"][target="_blank"]+.ob_source,
        :root a[href^="https://googleads.g.doubleclick.net/pcs/click"],
        :root a[href^="http://cdn.adstract.com/"],
        :root a[href^="https://gogoman.me/"],
        :root a[href^="https://go.stripchat.com/"][href*="&campaignId="],
        :root a[href*=".inclk.com/"],
        :root a[href^="https://go.ad2up.com/"],
        :root a[href^="https://freeadult.games/"],
        :root a[href^="//nlkdom.com/"],
        :root a[onmousedown^="this.href='http://staffpicks.outbrain.com/network/redir?"][target="_blank"],
        :root a[href^="https://fonts.fontplace9.com/"],
        :root a[href^="http://clkmon.com/adServe/"],
        :root a[href^="https://flirtaescopa.com/"],
        :root [lazy-ad="leftthin_banner"],
        :root a[href^="https://dynamicadx.com/"],
        :root a[href^="http://wxdownloadmanager.com/dl/"],
        :root div[class^="local-feed-banner-ads"],
        :root .GFYY1SVE2>.GFYY1SVD2>.GFYY1SVG5,
        :root a[href^="https://djtcollectorclub.org/"][href*="?affiliate_id="],
        :root a[href^="https://chaturbate.xyz/"],
        :root a[href^="https://chaturbate.jjgirls.com/"][href*="?tour="],
        :root a[href^="https://chaturbate.com/in/?tour="],
        :root a[href^="https://chaturbate.com/affiliates/"],
        :root a[href^="http://www.1clickdownloader.com/"],
        :root a[href^="https://www.googleadservices.com/pagead/aclk?"],
        :root a[href^="https://awentw.com/"],
        :root a[href^="https://servedbyadbutler.com/"],
        :root a[href^="https://betway.com/"][href*="&a="],
        :root a[href^="http://dethao.com/"],
        :root a[href^="https://ads.ad4game.com/"],
        :root a[href^="https://affiliates.bet-at-home.com/processing/"],
        :root a[href^="http://adultfriendfinder.com/p/register.cgi?pid="],
        :root a[href^="https://www.popads.net/users/"],
        :root iframe[src^="http://ad.yieldmanager.com/"],
        :root a[href^="http://pubads.g.doubleclick.net/"],
        :root a[href^="https://sexdatingz.live/"],
        :root a[href^="//bwnjijl7w.com/"],
        :root a[href^="https://adultfriendfinder.com/go/page/landing"],
        :root a[href*="pussl3.com"],
        :root a[href^="https://adswick.com/"],
        :root ADS-RIGHT,
        :root .GKJYXHBF2>.GKJYXHBE2>.GKJYXHBH5,
        :root a[href^="https://adserver.adreactor.com/"],
        :root a[href^="https://refpaano.host/"],
        :root a[href^="https://meet-to-fuck.com/tds"],
        :root a[href^="http://data.linoleictanzaniatitanic.com/"],
        :root a[href^="https://adhealers.com/"],
        :root a[href^="https://adclick.g.doubleclick.net/"],
        :root a[href^="https://ad.doubleclick.net/"],
        :root a[href^="http://zevera.com/afi.html"],
        :root a[href^="http://go.oclaserver.com/"],
        :root a[href^="https://ad.atdmt.com/"],
        :root .trc_rbox .syndicatedItem,
        :root a[href^="https://aaucwbe.com/"],
        :root a[href^="https://a.adtng.com/"],
        :root a[href^="https://8a1ccf65f2b1302.com/"],
        :root a[href^="http://xtgem.com/click?"],
        :root a[href^="https://ads.trafficpoizon.com/"],
        :root a[href^="http://rekoverr.com/"],
        :root a[href^="https://chaturbate.com/in/?track="],
        :root a[href^="http://www.zergnet.com/i/"],
        :root a[href^="http://hyperies.info/"],
        :root a[href^="http://www.torntv-downloader.com/"],
        :root a[href^="http://www.tirerack.com/affiliates/"],
        :root div[class^="AdBannerWrapper-"],
        :root a[href^="http://www.text-link-ads.com/"],
        :root a[href^="http://www.friendlyquacks.com/"],
        :root div[id^="div_openx_ad_"],
        :root a[href^="http://www.streamate.com/exports/"],
        :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"],
        :root a[href^="http://www.sfippa.com/"],
        :root a[href^="http://www.xmediaserve.com/"],
        :root a[href^="http://www.sex.com/videos/?utm_"],
        :root a[href^="http://paid.outbrain.com/network/redir?"],
        :root a[href^="http://www.sex.com/?utm_"],
        :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"],
        :root a[href^="http://www.roboform.com/php/land.php"],
        :root a[href^="http://secure.signup-page.com/"],
        :root a[href^="http://www.quick-torrent.com/download.html?aff"],
        :root a[href^="http://adexprt.me/"],
        :root a[href^="http://www.pinkvisualgames.com/?revid="],
        :root a[href^="https://trklvs.com/"],
        :root a[href^="http://www.paddypower.com/?AFF_ID="],
        :root div[data-spotim-slot],
        :root a[href^="http://www.freefilesdownloader.com/"],
        :root a[href^="http://www.mysuperpharm.com/"],
        :root .trc_rbox_border_elm .syndicatedItem,
        :root a[href^="http://www.myfreepaysite.com/sfw_int.php?aid"],
        :root a[href^="http://www.myfreepaysite.com/sfw.php?aid"],
        :root .rhsvw[style="background-color:#fff;margin:0 0 14px;padding-bottom:1px;padding-top:1px;"],
        :root a[href^="http://www.moneyducks.com/"],
        :root a[href^="http://bcntrack.com/"],
        :root a[href^="http://www.securegfm.com/"],
        :root a[href^="http://www.liversely.net/"],
        :root a[href^="http://www.linkbucks.com/referral/"],
        :root a[href^="//88d7b6aa44fb8eb.com/"],
        :root a[href^="http://www.ireel.com/signup?ref"],
        :root a[href*="=Adtracker"],
        :root a[href^="http://www.incredimail.com/?id="],
        :root a[href^="http://www.idownloadplay.com/"],
        :root a[href^="http://www.hitcpm.com/"],
        :root a[href^="http://www.gamebookers.com/cgi-bin/intro.cgi?"],
        :root a[href^="https://www.financeads.net/tc.php?"],
        :root a[href^="http://www.friendlyduck.com/AF_"],
        :root a[href*="emprestimo.eu"],
        :root a[href^="http://www.fpcTraffic2.com/blind/in.cgi?"],
        :root a[href^="http://www.fonts.com/BannerScript/"],
        :root a[href^="http://www.fleshlight.com/"],
        :root a[href^="http://www.flashx.tv/downloadthis"],
        :root .trc_rbox_div a[target="_blank"][href^="http://tab"],
        :root a[href^="https://americafirstpolls.com/"],
        :root a[href^="http://clickserv.sitescout.com/"],
        :root a[href^="http://www.firstload.de/affiliate/"],
        :root a[href^="http://www.twinplan.com/AF_"],
        :root a[href^="http://www.fducks.com/"],
        :root a[href^="http://www.epicgameads.com/"],
        :root a[href^="http://www.easydownloadnow.com/"],
        :root a[href^="http://www.duckssolutions.com/"],
        :root a[href^="https://go.trkclick2.com/"],
        :root a[href^="http://www.duckcash.eu/"],
        :root a[href^="http://go.seomojo.com/tracking202/"],
        :root a[href^="http://www.downloadweb.org/"],
        :root .commercial-unit-mobile-top .jackpot-main-content-container>.UpgKEd+.nZZLFc>.vci,
        :root a[href^="http://www.installads.net/"],
        :root div[role="navigation"]+c-wiz>div>.kxhcC,
        :root a[href^="http://www.download-provider.org/"],
        :root a[href^="http://www.down1oads.com/"],
        :root a[href^="https://trafficmedia.center/"],
        :root a[href^="http://www.dealcent.com/register.php?affid="],
        :root a[href^="https://gghf.mobi/"],
        :root a[href^="http://www.terraclicks.com/"],
        :root a[href^="http://www.coinducks.com/"],
        :root .rscontainer>.ellip,
        :root a[href^="http://www.clkads.com/adServe/"],
        :root a[href^="http://www.clickansave.net/"],
        :root div[class^="adpubs-"],
        :root a[href*="deliver.trafficfabrik.com"],
        :root a[href^="http://www.cash-duck.com/"],
        :root a[href^="http://www.bitlord.me/share/"],
        :root a[href^="http://www.bet365.com/"][href*="?affiliate="],
        :root a[href^="http://www.bet365.com/"][href*="&affiliate="],
        :root a[href^="http://www.badoink.com/go.php?"],
        :root #mbEnd[cellspacing="0"][cellpadding="0"],
        :root div[data-ad-underplayer],
        :root a[href^="http://www.richducks.com/"],
        :root a[href^="http://www.babylon.com/welcome/index?affID"],
        :root a[href^="http://www.sexgangsters.com/?pid="],
        :root a[href^="http://www.amazon.co.uk/exec/obidos/external-search?"],
        :root a[href^="https://ads-for-free.com/click.php?"],
        :root a[href^="http://tracker.mybroadband.co.za/"],
        :root a[href^="http://www.socialsex.com/"],
        :root a[href^="https://www.camsoda.com/enter.php?id="],
        :root a[href^="http://go.ad2up.com/"],
        :root a[href^="https://badoinkvr.com/"],
        :root a[href*="/adServe/banners?"],
        :root a[href^="http://www.adxpansion.com"],
        :root .plistaList>.itemLinkPET,
        :root a[href^="http://www.adbrite.com/mb/commerce/purchase_form.php?"],
        :root a[href^="http://www.adultdvdempire.com/?partner_id="][href*="&utm_"],
        :root a[href^="http://www.ragazzeinvendita.com/?rcid="],
        :root a[href^="http://www.TwinPlan.com/AF_"],
        :root div[class^="adbanner_"],
        :root a[href^="http://www.brightwheel.info/"],
        :root a[href^="https://www.iclwy.xyz/"],
        :root a[href^="http://www.123-reg.co.uk/affiliate2.cgi"],
        :root div[id^="lazyad-"],
        :root div[itemtype="http://www.schema.org/WPAdBlock"],
        :root a[href^="http://wopertific.info/"],
        :root a[href^="http://bodelen.com/"],
        :root a[href^="http://wgpartner.com/"],
        :root a[href^="http://webgirlz.online/landing/"],
        :root div[id^="sticky_ad_"],
        :root div[id^="ads300_600-widget"],
        :root div[class^="Ad__adContainer"],
        :root a[href^="http://web.adblade.com/"],
        :root div[class^="BlockAdvert-"],
        :root a[href^="https://go.onclasrv.com/"],
        :root a[href^="http://wct.link/"],
        :root a[href^="https://topoffers.com/"][href*="/?pid="],
        :root a[href^="http://vinfdv6b4j.com/"],
        :root a[href^="http://s9kkremkr0.com/"],
        :root a[href^="https://www.nutaku.net/signup/landing/"],
        :root a[href^="http://us.marketgid.com"],
        :root a[href^="http://ul.to/ref/"],
        :root a[href^="https://adsrv4k.com/"],
        :root a[href^="http://trk.mdrtrck.com/"],
        :root a[href*=".ichlnk.com/"],
        :root div[id^="div_ad_stack_"],
        :root a[href^="http://traffic.tc-clicks.com/"],
        :root div[class^="awpcp-random-ads"],
        :root a[href^="http://www.graboid.com/affiliates/"],
        :root a[href^="http://tracking.toroadvertising.com/"],
        :root a[href^="http://www.liutilities.com/"],
        :root a[href^="http://www.dl-provider.com/search/"],
        :root a[href^="http://tracking.deltamediallc.com/"],
        :root a[href^="http://track.adform.net/"],
        :root a[href^="https://iac.ampxdirect.com/"],
        :root a[href^="http://t.mdn2015x3.com/"],
        :root a[href^="https://m.do.co/c/"]>img,
        :root ad-slot--header-banner,
        :root a[href^="http://b.bestcompleteusa.info/"],
        :root div[data-subscript="Advertising"],
        :root div[class$="dealnews"]>.dealnews,
        :root a[href^="http://t.mdn2015x2.com/"],
        :root a[href^="http://www.seekbang.com/cs/"],
        :root a[href^="http://bluehost.com/track/"],
        :root a[href^="http://syndication.exoclick.com/"],
        :root .ob_dual_right>.ob_ads_header~.odb_div,
        :root a[href*=".adk2x.com/"],
        :root a[href^="http://spygasm.com/track?"],
        :root a[href^="http://sharesuper.info/"],
        :root a[href^="http://campaign.bharatmatrimony.com/cbstrack/"],
        :root a[href^="https://www.mypornstarcams.com/landing/click/"],
        :root [href^="https://maskip.co/"],
        :root a[href^="http://getlinksinaseconds.com/"],
        :root a[href*=".intab.fun/"],
        :root a[href^="http://secure.signup-way.com/"],
        :root a[href*=".clkcln.com/"],
        :root [onclick^="window.open('http://adultfriendfinder.com/search/"],
        :root a[href^="http://secure.hostgator.com/~affiliat/"],
        :root a[href*="/cmd.php?ad="],
        :root a[href^="http://refpaano.host/"],
        :root #\5f _mom_ad_2,
        :root a[href^="http://ads.sprintrade.com/"],
        :root a[href^="http://record.commissionking.com/"],
        :root div[class*="-storyBodyAd-"],
        :root a[href^="http://record.betsafe.com/"],
        :root a[href^="https://keep2share.cc/pr/"],
        :root a[href^="https://clixtrac.com/"],
        :root [onclick*="content.ad/"],
        :root a[href^="http://adlev.neodatagroup.com/"],
        :root a[href^="http://reallygoodlink.extremefreegames.com/"],
        :root a[href^="http://promos.bwin.com/"],
        :root a[href*=".irtyc.com/"],
        :root a[href^="http://z1.zedo.com/"],
        :root a[href^="http://pokershibes.com/index.php?ref="],
        :root a[href^="http://mmo123.co/"],
        :root a[href^="https://www.oboom.com/ref/"],
        :root a[href^="http://media.paddypower.com/redirect.aspx?"],
        :root a[href^="http://allaptair.club/"],
        :root #rhs_block .xpdopen>._OKe>div>.mod>._yYf,
        :root a[href^="//ads.ad-center.com/"],
        :root a[href^="https://track.trkinator.com/"],
        :root a[data-redirect^="this.href='http://paid.outbrain.com/network/redir?"],
        :root div[id^="ad-position-"],
        :root a[href^="http://liversely.com/"],
        :root a[href^="https://deliver.ptgncdn.com/"],
        :root a[href^="https://www.arthrozene.com/"][href*="?tid="],
        :root a[href^="http://feeds1.validclick.com/"],
        :root a[href^="http://latestdownloads.net/download.php?"],
        :root a[href^="http://k2s.cc/code/"],
        :root #topstuff>#tads,
        :root a[href*=".bang.com/"][href*="&aff="],
        :root a[data-widget-outbrain-redirect^="http://paid.outbrain.com/network/redir?"],
        :root a[href^="http://join3.bannedsextapes.com/track/"],
        :root a[href^="https://gamescarousel.com/"],
        :root a[href^="http://istri.it/?"],
        :root a[href^="http://www.fbooksluts.com/"],
        :root a[href^="http://www.cdjapan.co.jp/aff/click.cgi/"],
        :root a[href^="//api.ad-goi.com/"],
        :root a[href*="//ridingintractable.com/"],
        :root a[href^="http://intent.bingads.com/"],
        :root div[id^="crt-"][style],
        :root a[href^="http://igromir.info/"],
        :root a[href^="https://track.themadtrcker.com/"],
        :root a[href^="http://hyperlinksecure.com/go/"],
        :root a[href^="http://45eijvhgj2.com/"],
        :root a[href^="http://hpn.houzz.com/"],
        :root a[href*="?adlivk="][href*="&refer="],
        :root a[href^="http://searchtabnew.com/"],
        :root a[href^="//look.djfiln.com/"],
        :root a[href^="http://greensmoke.com/"],
        :root div[id^="google_dfp_"],
        :root a[href^="//5e1fcb75b6d662d.com/"],
        :root a[href^="http://googleads.g.doubleclick.net/pcs/click"],
        :root a[href^="https://bnsjb1ab1e.com/"],
        :root a[href^="http://mo8mwxi1.com/"],
        :root div[class^="ResponsiveAd-"],
        :root a[href^="http://install.securewebsiteaccess.com/"],
        :root a[href^="http://www.revenuehits.com/"],
        :root div[id^="block-views-topheader-ad-block-"],
        :root a[href^="https://bs.serving-sys.com"],
        :root .__y_elastic .__y_item,
        :root a[href^="http://go.mobisla.com/"],
        :root a[href^="//srv.buysellads.com/"],
        :root a[href^="http://g1.v.fwmrm.net/ad/"],
        :root .widget-pane-section-result[data-result-ad-type],
        :root a[href^="http://imads.integral-marketing.com/"],
        :root a[href^="http://freesoftwarelive.com/"],
        :root a[href^="http://adtrackone.eu/"],
        :root a[href^="http://finaljuyu.com/"],
        :root a[href^="http://fileloadr.com/"],
        :root a[href^="https://dltags.com/"],
        :root a[href^="http://onclickads.net/"],
        :root a[href^="http://extra.bet365.com/"][href*="?affiliate="],
        :root a[href^="http://ethfw0370q.com/"],
        :root [id^="bunyad_ads_"],
        :root a[href^="http://elitefuckbook.com/"],
        :root a[href^="http://eclkmpsa.com/"],
        :root a[href*="//3wr110.xyz/"],
        :root a[href^="http://earandmarketing.com/"],
        :root #content>#center>.dose>.dosesingle,
        :root a[href^="http://campaign.bharatmatrimony.com/track/"],
        :root a[href^="http://d2.zedo.com/"],
        :root a[href^="http://keep2share.cc/pr/"],
        :root a[href^="http://cp.cbbp1.com"],
        :root a[href^="http://contractallsticker.net/"],
        :root a[href^="http://codec.codecm.com/"],
        :root a[href^="http://refer.webhostingbuzz.com/"],
        :root a[href^="https://paid.outbrain.com/network/redir?"],
        :root a[href^="http://www.downloadplayer1.com/"],
        :root a[href^="http://clicks.binarypromos.com/"],
        :root iframe[name^="google_ads_iframe"],
        :root div[class^="largeRectangleAd_"],
        :root a[href^="https://dediseedbox.com/clients/aff.php?"],
        :root a[href^="http://www.wantstraffic.com/"],
        :root a[href^="http://databass.info/"],
        :root a[href^="http://www.urmediazone.com/signup"],
        :root a[href^="http://click.plista.com/pets"],
        :root a[href^="https://a.bestcontentpc.top/"],
        :root a[href^="http://chaturbate.com/affiliates/"],
        :root a[href^="http://www.firstload.com/affiliate/"],
        :root a[href^="http://www.friendlyadvertisements.com/"],
        :root a[href^="//00ae8b5a9c1d597.com/"],
        :root a[href^="http://cdn3.adbrau.com/"],
        :root a[href^="http://get.slickvpn.com/"],
        :root a[href^="http://amzn.to/"]>img[src^="data"],
        :root a[href^="http://bs.serving-sys.com/"],
        :root a[href^="http://cpaway.afftrack.com/"],
        :root a[href^="http://cdn.adsrvmedia.net/"],
        :root [lazy-ad="top_banner"],
        :root a[href^="http://360ads.go2cloud.org/"],
        :root a[href^="http://dftrck.com/"],
        :root a[href^="http://casino-x.com/?partner"],
        :root div[data-flt-ve="sponsored_search_ads"],
        :root a[href^="http://record.sportsbetaffiliates.com.au/"],
        :root a[href^="http://campeeks.com/"][href*="&utm_"],
        :root #flowplayer>div[style="position: absolute; width: 300px; height: 275px; left: 222.5px; top: 85px; z-index: 999;"],
        :root a[href^="http://download-performance.com/"],
        :root a[href^="http://www.on2url.com/app/adtrack.asp"],
        :root #\5f _nq__hh[style="display:block!important"],
        :root a[href^="http://guideways.info/"],
        :root a[href^="http://ads.expekt.com/affiliates/"],
        :root a[href^="http://callville.xyz/"],
        :root a[href^="https://www.nudeidols.com/cams/"],
        :root div[itemtype="http://schema.org/WPAdBlock"],
        :root a[href^="http://xads.zedo.com/"],
        :root a[href^="http://www.affiliates1128.com/processing/"],
        :root a[href^="http://c.jumia.io/"],
        :root a[href^="https://bullads.net/get/"],
        :root a[href^="http://yads.zedo.com/"],
        :root a[href^="http://down1oads.com/"],
        :root a[href^="http://buysellads.com/"],
        :root a[href^="http://serve.williamhill.com/promoRedirect?"],
        :root a[href^="https://uncensored.game/"],
        :root td[valign="top"]>.mainmenu[style="padding:10px 0 0 0 !important;"],
        :root a[href^="http://feedads.g.doubleclick.net/"],
        :root a[href^="http://betahit.click/"],
        :root #rhs_block>#mbEnd,
        :root a[href^="http://cinema.friendscout24.de?"],
        :root [lazy-ad="lefttop_banner"],
        :root a[href^="http://servicegetbook.net/"],
        :root a[href^="http://bestorican.com/"],
        :root a[href^="http://bcp.crwdcntrl.net/"],
        :root a[href^="http://bc.vc/?r="],
        :root a[href^="http://banners.victor.com/processing/"],
        :root a[href^="http://adf.ly/?id="],
        :root a[href^="https://uncensored3d.com/"],
        :root a[href^="http://click.payserve.com/"],
        :root a[href^="http://s5prou7ulr.com/"],
        :root a[href^="http://azmobilestore.co/"],
        :root a[href^="http://affiliate.glbtracker.com/"],
        :root a[href^="https://transfer.xe.com/signup/track/redirect?"],
        :root a[href^="http://anonymous-net.com/"],
        :root div[id^="ad_position_"],
        :root a[href^="https://www.dsct1.com/"],
        :root a[data-oburl^="https://paid.outbrain.com/network/redir?"],
        :root .icons-rss-feed+.icons-rss-feed div[class$="_item"],
        :root a[href^="http://aflrm.com/"],
        :root a[href^="http://affiliates.pinnaclesports.com/processing/"],
        :root a[href^="http://partner.sbaffiliates.com/"],
        :root a[href^="http://affiliate.coral.co.uk/processing/"],
        :root a[href^="http://aff.ironsocket.com/"],
        :root a[href^="http://adsrv.keycaptcha.com"],
        :root a[href^="https://zononi.com/"],
        :root a[href^="http://adserving.unibet.com/"],
        :root a[href^="https://secure.adnxs.com/clktrb?"],
        :root a[href^="http://adserver.adtechus.com/"],
        :root a[href^="http://adserver.adreactor.com/"],
        :root a[href^="http://www.yourfuckbook.com/?"],
        :root a[href^="//go.onclasrv.com/"],
        :root .GHOFUQ5BG2>.GHOFUQ5BF2>.GHOFUQ5BG5,
        :root a[href^="http://cwcams.com/landing/click/"],
        :root a[href^="http://ads.betfair.com/redirect.aspx?"],
        :root a[href^="http://ads.affbuzzads.com/"],
        :root a[href^="http://tc.tradetracker.net/"],
        :root a[href^="http://online.ladbrokes.com/promoRedirect?"],
        :root a[href^="http://go.trafficshop.com/"],
        :root a[href^="http://ads.ad-center.com/"],
        :root div[id^="q1-adset-"],
        :root a[href^="https://horny-pussies.com/tds"],
        :root a[href^="http://adfarm.mediaplex.com/"],
        :root a[href^="http://ad.doubleclick.net/"],
        :root a[href^="https://k2s.cc/pr/"],
        :root a[href^="http://ad.au.doubleclick.net/"],
        :root .ob_container .item-container-obpd,
        :root a[href^="http://websitedhoome.com/"],
        :root a[href^="http://www.adskeeper.co.uk/"],
        :root a[href^="https://is.ltroute.com/"],
        :root a[href^="http://www.incredimail.com/?id"],
        :root a[href*="/servlet/click/zone?"],
        :root a[href^="http://ad-apac.doubleclick.net/"],
        :root a[href^="http://a63t9o1azf.com/"],
        :root a[href^="http://srvpub.com/"],
        :root a[href^="http://a.adquantix.com/"],
        :root a[href^="http://NowDownloadAll.com"],
        :root a[href^="http://adtrack123.pl/"],
        :root a[href^="http://9amq5z4y1y.com/"],
        :root a[href^="http://4c7og3qcob.com/"],
        :root a[href^="//go.vedohd.org/"],
        :root a[href^="http://www.ducksnetwork.com/"],
        :root a[href^="http://3wr110.net/"],
        :root a[href^="http://1phads.com/"],
        :root a[href^="https://bongacams2.com/track?"],
        :root a[href^="//zenhppyad.com/"],
        :root #MAIN.ShowTopic>.ad,
        :root a[href^="https://porngames.adult/?SID="],
        :root a[href^="http://findersocket.com/"],
        :root a[href^="http://connectlinking6.com/"],
        :root a[href^="https://spygasm.com/track?"],
        :root a[href^="http://cdn3.adexprts.com/"],
        :root #tads+div+.c,
        :root a[href^="//jsmptjmp.com/"],
        :root .ra[width="30%"][align="right"]+table[width="70%"][cellpadding="0"],
        :root a[href^="https://ilovemyfreedoms.com/"][href*="?affiliate_id="],
        :root a[href^="//healthaffiliate.center/"],
        :root [id*="ScriptRoot"],
        :root a[href^="//db52cc91beabf7e8.com/"],
        :root div[id^="drudge-column-ads-"],
        :root .plistaList>.plista_widget_underArticle_item[data-type="pet"],
        :root #center_col>#taw>#tvcap>.commercial-unit-desktop-top,
        :root a[href^="http://www.afgr2.com/"],
        :root #mn div[style="position:relative"]>#center_col>._Ak,
        :root a[href^="https://www.oboom.com/ad/"],
        :root a[href^="//4f6b2af479d337cf.com/"],
        :root a[href^="https://www.friendlyduck.com/AF_"],
        :root #center_col>#resultStats+div+#res+#tads,
        :root a[href^="//40ceexln7929.com/"],
        :root div[id^="div-gpt-ad"],
        :root a[href^="http://fusionads.net"],
        :root a[href^="https://awejmp.com/"],
        :root a[href^=" http://www.sex.com/"][href*="&utm_"],
        :root a[href^="http://stateresolver.link/"],
        :root a[href^="http://galleries.securewebsiteaccess.com/"],
        :root .section-result[data-result-ad-type],
        :root a[href^=" http://ads.ad-center.com/"],
        :root div[id^="dfp-slot-"],
        :root .l-container>#fishtank,
        :root a[href^="https://fileboom.me/pr/"],
        :root a[href^="http://marketgid.com"],
        :root .GPMV2XEDA2>.GPMV2XEDP1>.GPMV2XEDJBB,
        :root a[href*="onclkds."],
        :root .trc_rbox_div .syndicatedItem,
        :root #ads>.dose>.dosesingle,
        :root a[href*="delivery.trafficfabrik.com"],
        :root a[href*="=exoclick"],
        :root div[class^="backfill-taboola-home-slot-"],
        :root a[href*="=adscript"],
        :root #mn #center_col>div>h2.spon:first-child,
        :root FBS-AD,
        :root .ra[align="right"][width="30%"],
        :root a[href*="5iclx7wa4q.com"],
        :root a[href^="http://lp.ncdownloader.com/"],
        :root a[href^="//pubads.g.doubleclick.net/"],
        :root a[href^="http://www.drowle.com/"],
        :root a[href*=".udncoeln.com/"],
        :root a[href*=".qertewrt.com/"],
        :root a[target="_blank"][href^="http://api.taboola.com/"],
        :root a[href*=".smartadserver.com"],
        :root a[href^="http://track.incognitovpn.com/"],
        :root a[data-oburl^="http://paid.outbrain.com/network/redir?"],
        :root a[href^="http://refpa.top/"],
        :root a[href*=".revimedia.com/"],
        :root .__ywvr .__y_item,
        :root a[href^="https://farm.plista.com/pets"],
        :root a[href*=".red90121.com/"],
        :root a[href^="http://www.greenmangaming.com/?tap_a="],
        :root a[href*=".opskln.com/"],
        :root a[href*=".fwd28.com/"],
        :root [lazy-ad="leftbottom_banner"],
        :root p[id^="div-gpt-ad-"],
        :root a[href^="http://fsoft4down.com/"],
        :root a[href*="ad2upapp.com/"],
        :root .inlineNewsletterSubscription+.inlineNewsletterSubscription div[class$="_item"],
        :root a[href*=".orange2258.com/"],
        :root #taw>.med+div>#tvcap>.mnr-c:not(.qs-ic)>.commercial-unit-mobile-top,
        :root .plista_widget_belowArticleRelaunch_item[data-type="pet"],
        :root .mod>.gws-local-promotions__border,
        :root a[href^="http://data.committeemenencyclopedicrepertory.info/"],
        :root a[href*=".allsports4you.club"],
        :root a[href^="http://duckcash.eu/"],
        :root a[href^="http://www.mobileandinternetadvertising.com/"],
        :root a[href^="http://www.downloadthesefiles.com/"],
        :root a[href^="http://secure.cbdpure.com/aff/"],
        :root .GB3L-QEDGY .GB3L-QEDF->.GB3L-QEDE-,
        :root a[data-url^="http://paid.outbrain.com/network/redir?"]+.author,
        :root a[href^="http://liversely.net/"],
        :root iframe[id^="google_ads_frame"],
        :root a[href^="http://www.bluehost.com/track/"]>img,
        :root a[data-url^="http://paid.outbrain.com/network/redir?"],
        :root a[href^="http://play4k.co/"],
        :root a[data-redirect^="https://paid.outbrain.com/network/redir?"],
        :root a[href^="http://n.admagnet.net/"],
        :root a[href^="http://bestchickshere.com/"],
        :root a[href^="http://www.streamtunerhd.com/signup?"],
        :root #ssmiwdiv[jsdisplay],
        :root a[href^="//awejmp.com/"],
        :root a[href^="http://www.getyourguide.com/?partner_id="],
        :root [onclick^="window.open('https://www.brazzersnetwork.com/landing/"],
        :root a[href*=".adsrv.eacdn.com/"]>img,
        :root a[href^="http://mgid.com/"],
        :root a[href*="a2g-secure.com"],
        :root #resultspanel>#topads,
        :root a[href^="http://espn.zlbu.net/"],
        :root a[href^="http://k2s.cc/pr/"],
        :root a[href^="http://9nl.es/"],
        :root #assetsListings[style="display: block;"],
        :root [onclick^="window.open('window.open('//delivery.trafficfabrik.com/"],
        :root a[href^="http://adrunnr.com/"],
        :root [id*="MarketGid"],
        :root div[data-mediatype="advertising"],
        :root .mw>#rcnt>#center_col>#taw>#tvcap>.c,
        :root a[href^="https://playuhd.host/"],
        :root a[href^="http://c.ketads.com/"],
        :root a[href^="http://6kup12tgxx.com/"],
        :root a[target="_blank"][onmousedown="this.href^='http://paid.outbrain.com/network/redir?"],
        :root a[href^="https://www.brazzersnetwork.com/landing/"],
        :root #cnt #center_col>#taw>#tvcap>.c._oc._Lp,
        :root [href*="//xml.revrtb.com/"],
        :root a[href^="http://hd-plugins.com/download/"],
        :root a[href^="//voyeurhit.com/cs/"],
        :root a[href^="http://www.afgr3.com/"],
        :root [ad-id^="googlead"],
        :root a[href^="//porngames.adult/?SID="],
        :root DFP-AD,
        :root a[href^="http://adclick.g.doubleclick.net/"],
        :root #main-content>[style="padding:10px 0 0 0 !important;"],
        :root #center_col>#resultStats+div[style="border:1px solid #dedede;margin-bottom:11px;padding:5px 7px 5px 6px"],
        :root div[class^="lifeOnwerAd"],
        :root a[href$="/vghd.shtml"],
        :root a[href^="https://redirect.ero-advertising.com/"],
        :root a[href^="http://easydownload4you.com/"],
        :root a[href^="http://ffxitrack.com/"],
        :root #center_col>#main>.dfrd>.mnr-c>.c._oc._zs,
        :root .trc_rbox_div .syndicatedItemUB,
        :root #mn div[style="position:relative"]>#center_col>div>._dPg,
        :root a[href^="http://www.myvpn.pro/"],
        :root a[href^="//www.pd-news.com/"],
        :root a[href^="http://see-work.info/"],
        :root a[href^="http://www.pinkvisualpad.com/?revid="],
        :root a[href*=".clksite.com/"],
        :root a[href^="http://www.webtrackerplus.com/"],
        :root .GJJKPX2N1>.GJJKPX2M1>.GJJKPX2P4,
        :root #center_col>#taw>#tvcap>.cu-container>.commercial-unit-desktop-top,
        :root a[href^="http://centertrust.xyz/"],
        :root a[href^="https://intrev.co/"],
        :root div[id^="google_ads_iframe_"],
        :root .vi-lb-placeholder[title="ADVERTISEMENT"],
        :root a[href^="http://goldmoney.com/?gmrefcode="],
        :root a[href^="http://papi.mynativeplatform.com:80/pub2/"],
        :root LEADERBOARD-AD,
        :root #mn #center_col>div>h2.spon:first-child+ol:last-child,
        :root a[href^="http://www.mrskin.com/tour"],
        :root .jobs-information-call-to-action+.jobs-information-call-to-action div[class$="_item"],
        :root .gbfwa>div[class$="_item"],
        :root a[href^="http://t.mdn2015x1.com/"],
        :root a[href^="http://www.menaon.com/installs/"],
        :root a[href^="http://taboola-"][href*="/redirect.php?app.type="],
        :root .mw>#rcnt>#center_col>#taw>.c,
        :root a[href^="https://www.incredimail.com/?id"],
        :root a[href^="http://api.content.ad/"],
        :root a[href^="http://adtransfer.net/"],
        :root .commercial-unit-desktop-rhs>.iKidV>.Ee92ae+.P2mpm+.hp3sk,
        :root a[href^="http://www.uniblue.com/cm/"],
        :root a[href^="http://landingpagegenius.com/"],
        :root a[data-redirect^="http://click.plista.com/pets"],
        :root #rhs_block>script+.c._oc._Ve.rhsvw,
        :root #\5f _mom_ad_12,
        :root .__zinit .__y_item,
        :root .ch[onclick="ga(this,event)"],
        :root .__ywl .__y_item,
        :root a[href^="http://track.trkvluum.com/"],
        :root a[href*="/adrotate-out.php?"],
        :root a[href^="http://linksnappy.com/?ref="],
        :root [src^="/Redirect.a2b?"],
        :root a[href^="http://www.torntvdl.com/"],
        :root #center_col>#resultStats+#tads,
        :root .__yinit .__y_item,
        :root a[href^="//www.mgid.com/"],
        :root #center_col>div[style="font-size:14px;margin-right:0;min-height:5px"]>div[style="font-size:14px;margin:0 4px;padding:1px 5px;background:#fff8e7"],
        :root a[href^="http://track.affiliatenetwork.co.za/"],
        :root a[data-redirect^="http://paid.outbrain.com/network/redir?"],
        :root a[href^="https://secure.cbdpure.com/aff/"],
        :root AMP-AD,
        :root .__y_inner>.__y_item,
        :root .ra[align="left"][width="30%"],
        :root a[href^="https://trackjs.com/?utm_source"],
        :root AFS-AD,
        :root a[href^="https://awecrptjmp.com/"],
        :root a[href^="http://server.cpmstar.com/click.aspx?poolid="],
        :root #cnt #center_col>#res>#topstuff>.ts,
        :root a[href^="https://landing.brazzersnetwork.com/"],
        :root a[href^="http://www.firstclass-download.com/"],
        :root a[href*=".trust.zone"],
        :root a[href*="googleme.eu"],
        :root .mod>._jH+.rscontainer,
        :root .GFYY1SVD2>.GFYY1SVC2>.GFYY1SVF5,
        :root a[href^="http://affiliates.score-affiliates.com/"],
        :root #rhswrapper>#rhssection[border="0"][bgcolor="#ffffff"],
        :root .Mpopup+#Mad>#MadZone,
        :root a[href^="https://www.adxtro.com/"],
        :root #center_col>#\5f Emc,
        :root div[id^="dfp-ad-"],
        :root #rhs_block .mod>.luhb-div>div[data-async-type="updateHotelBookingModule"],
        :root div[class^="advertisement-desktop"],
        :root a[href^="http://ads2.williamhill.com/redirect.aspx?"],
        :root a[href^="https://www.spyoff.com/"],
        :root AD-TRIPLE-BOX,
        :root .rc-cta[data-target],
        :root #rhs_block>.ts[cellspacing="0"][cellpadding="0"][style="padding:0"],
        :root #header+#content>#left>#rlblock_left,
        :root a[href^="https://squren.com/rotator/?atomid="],
        :root .nrelate .nr_partner,
        :root #center_col>#resultStats+#tads+#res+#tads,
        :root a[href^="//medleyads.com/spot/"],
        :root a[href*="mfroute.com/"],
        :root a[href^="//z6naousb.com/"],
        :root #rhs_block>ol>.rhsvw>.kp-blk>.xpdopen>._OKe>ol>._DJe>.luhb-div,
        :root a[href^="http://tezfiles.com/pr/"],
        :root a[href^="http://t.wowtrk.com/"],
        :root #center_col>#taw>#tvcap>.rscontainer,
        :root #main_col>#center_col div[style="font-size:14px;margin:0 4px;padding:1px 5px;background:#fff7ed"],
        :root a[href^="http://webtrackerplus.com/"],
        :root a[href^="http://clickandjoinyourgirl.com/"],
        :root #center_col>#res>#topstuff+#search>div>#ires>#rso>#flun,
        :root a[href^="http://www.sex.com/pics/?utm_"],
        :root a[href^="http://vo2.qrlsx.com/"],
        :root a[href^="http://engine.newsmaxfeednetwork.com/"],
        :root a[href^="http://ad.yieldmanager.com/"],
        :root a[href^="http://www.plus500.com/?id="],
        :root #flowplayer>div[style="z-index: 208; position: absolute; width: 300px; height: 275px; left: 222.5px; top: 85px;"],
        :root a[href^="http://n217adserv.com/"],
        :root a[href^="//4c7og3qcob.com/"] {
            display: none !important;
        }
    </style>
    <style>
        .uvc-seperator-9644170674430 .ult-main-seperator-inner {}
    </style>
    <style>
        .uvc-seperator-9644170674430.top_seperator .separator-icon {
            -webkit-transform: translate(-50%, calc(-50% + 71px));
            -moz-transform: translate(-50%, calc(-50% + 71px));
            -ms-transform: translate(-50%, calc(-50% + 71px));
            -o-transform: translate(-50%, calc(-50% + 71px));
            transform: translate(-50%, calc(-50% + 71px));
        }

        .uvc-seperator-9644170674430.bottom_seperator .separator-icon {
            -webkit-transform: translate(-50%, calc(-50% - 71px));
            -moz-transform: translate(-50%, calc(-50% - 71px));
            -ms-transform: translate(-50%, calc(-50% - 71px));
            -o-transform: translate(-50%, calc(-50% - 71px));
            transform: translate(-50%, calc(-50% - 71px));
        }
    </style>
    <script src="https://nuestravision.tv/wp-content/cache/busting/facebook-tracking/fbpix-config-236975036994063-2.9.15.js" async=""></script>
</head>

<body class="home page-template-default page page-id-5072 wp-embed-responsive l-body Impreza_7.1 us-core_7.1.2 header_hor headerinpos_top links_underline wpb-js-composer js-comp-ver-6.0.5 vc_responsive state_default" itemscope="" itemtype="https://schema.org/WebPage">
    <div class="l-canvas type_wide">
        <header id="page-header" class="l-header pos_fixed shadow_thin id_2741 bg_transparent" itemscope="" itemtype="https://schema.org/WPHeader">
            <div class="l-subheader at_middle width_full">
                <div class="l-subheader-h">
                    <div class="l-subheader-cell at_left">
                        <div class="w-image ush_image_1"><a class="w-image-h" href="http://nuestravision.tv/"><img width="800" height="159" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/NuestraVision_Logo_Final_Color_Horizontal_20180902_01-opt-e1578594383281.png" class="attachment-large size-large lazyloaded" alt="NuestraVision Web Logo" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/NuestraVision_Logo_Final_Color_Horizontal_20180902_01-opt-e1578594383281.png" data-was-processed="true"><noscript><img width="800" height="159" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/NuestraVision_Logo_Final_Color_Horizontal_20180902_01-opt-e1578594383281.png" class="attachment-large size-large" alt="NuestraVision Web Logo" /></noscript></a></div>
                    </div>
                    <div class="l-subheader-cell at_center"></div>
                    <div class="l-subheader-cell at_right">
                        <nav class="w-nav ush_menu_1 height_full dropdown_height m_align_left m_layout_dropdown type_desktop" itemscope="" itemtype="https://schema.org/SiteNavigationElement"><a class="w-nav-control" href="javascript:void(0);" aria-label="Menu">
                                <div class="w-nav-icon"><i></i></div>
                            </a>
                            <ul class="w-nav-list level_1 hover_simple" style="">
                                <li id="menu-item-2737" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home w-nav-item level_1 menu-item-2737"><a class="w-nav-anchor level_1" href="http://nuestravision.tv/"><span class="w-nav-title">Inicio</span><span class="w-nav-arrow"></span></a></li>
                                <li id="menu-item-4063" class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_1 menu-item-4063"><a class="w-nav-anchor level_1" href="https://nuestravision.tv/on-air-territories/"><span class="w-nav-title">Cobertura</span><span class="w-nav-arrow"></span></a></li>
                                <li id="menu-item-2738" class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_1 menu-item-2738"><a class="w-nav-anchor level_1" href="https://nuestravision.tv/programming/"><span class="w-nav-title">Programación</span><span class="w-nav-arrow"></span></a></li>
                                <li id="menu-item-2747" class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_1 menu-item-2747"><a class="w-nav-anchor level_1" href="https://nuestravision.tv/contacto/"><span class="w-nav-title">Contacto</span><span class="w-nav-arrow"></span></a></li>
                                <li id="menu-item-7526" class="btn menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children w-nav-item level_1 menu-item-7526 togglable"><a class="w-nav-anchor level_1" href="#"><span class="w-nav-title">Corporate</span><span class="w-nav-arrow"></span></a>
                                    <ul class="w-nav-list level_2">
                                        <li id="menu-item-7257" class="menu-item menu-item-type-custom menu-item-object-custom w-nav-item level_2 menu-item-7257"><a class="w-nav-anchor level_2" href="https://corporate.nuestravision.tv/#join-us-row"><span class="w-nav-title">Advertisement</span><span class="w-nav-arrow"></span></a></li>
                                        <li id="menu-item-7258" class="menu-item menu-item-type-custom menu-item-object-custom w-nav-item level_2 menu-item-7258"><a class="w-nav-anchor level_2" href="https://corporate.nuestravision.tv/#join-us-row"><span class="w-nav-title">Affiliate Today</span><span class="w-nav-arrow"></span></a></li>
                                    </ul>
                                </li>
                                <li class="w-nav-close"></li>
                            </ul>
                            <div class="w-nav-options hidden" onclick="return {&quot;mobileWidth&quot;:800,&quot;mobileBehavior&quot;:1}"></div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="l-subheader for_hidden hidden"></div>
        </header>
        <main id="page-content" class="l-main" itemprop="mainContentOfPage">
            <section class="l-section wpb_row us_custom_6df4bc3a height_full valign_center has_text_color with_img" id="hero-section">
                <div data-bg="url(https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/04/NV_Web_hero_sec_background_01-e1573593758551.jpg)" class="l-section-img rocket-lazyload loaded" style="background-image: url(&quot;https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/04/NV_Web_hero_sec_background_01-e1573593758551.jpg&quot;);" data-img-width="2840" data-img-height="1598" data-was-processed="true"></div>
                <div class="l-section-h i-cf">
                    <div class="g-cols vc_row type_default valign_top">
                        <div class="vc_col-sm-12 vc_hidden-xs wpb_column vc_column_container align_center">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="w-image align_center">
                                        <div class="w-image-h"><img width="600" height="600" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2018/09/NV_Web_Logo_3D_20180904_900.png" class="attachment-us_600_0 size-us_600_0 lazyloaded" alt="NuestraVision landing Logo" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2018/09/NV_Web_Logo_3D_20180904_900.png" data-was-processed="true"><noscript><img width="600" height="600" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2018/09/NV_Web_Logo_3D_20180904_900.png" class="attachment-us_600_0 size-us_600_0" alt="NuestraVision landing Logo" /></noscript></div>
                                    </div>
                                    <div class="w-separator size_custom button_space" style="height:20px;"></div>
                                    <div class="w-btn-wrapper width_auto align_center"><a class="w-btn us-btn-style_3 us_custom_6c9a0c76" href="https://nuestravision.tv/nuestra-programacion/#hero-section" title="channel promo"><span class="w-btn-label">Ver Video</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="l-section wpb_row us_custom_910371cc height_medium has_text_color with_img" id="mobile-hero-section">
                <div data-bg="url(https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/04/NV_Web_hero_sec_background_mobile.jpg)" class="l-section-img rocket-lazyload loaded" style="background-repeat: no-repeat; background-image: url(&quot;https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/04/NV_Web_hero_sec_background_mobile.jpg&quot;);" data-img-width="768" data-img-height="432" data-was-processed="true"></div>
                <div class="l-section-h i-cf">
                    <div class="g-cols vc_row type_default valign_top">
                        <div class="vc_col-sm-12 vc_hidden-lg vc_hidden-md vc_hidden-sm wpb_column vc_column_container align_center">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="w-image align_center">
                                        <div class="w-image-h"><img width="400" height="400" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2018/09/NV_Web_Logo_3D_20180904_900.png" class="attachment-us_400_0 size-us_400_0 lazyloaded" alt="NuestraVision landing Logo" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2018/09/NV_Web_Logo_3D_20180904_900.png" data-was-processed="true"><noscript><img width="400" height="400" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2018/09/NV_Web_Logo_3D_20180904_900.png" class="attachment-us_400_0 size-us_400_0" alt="NuestraVision landing Logo" /></noscript></div>
                                    </div>
                                    <div class="w-separator size_custom" style="height:20px;"></div>
                                    <div class="w-btn-wrapper width_auto align_center"><a class="w-btn us-btn-style_3 us_custom_6c9a0c76" href="https://nuestravision.tv/nuestra-programacion/#hero-section" title="channel promo"><span class="w-btn-label">Ver Video</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="l-section wpb_row height_auto width_full with_img" id="elsabor">
                <div data-bg="url(https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/04/NV_Web_Background_sec2.jpg)" class="l-section-img rocket-lazyload loaded" style="background-repeat: no-repeat; background-image: url(&quot;https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/04/NV_Web_Background_sec2.jpg&quot;);" data-img-width="3840" data-img-height="2160" data-was-processed="true"></div>
                <div class="l-section-h i-cf">
                    <div class="g-cols vc_row type_boxes valign_middle">
                        <div class="vc_col-sm-12 wpb_column vc_column_container">
                            <div class="vc_column-inner us_custom_be3606da ">
                                <div class="wpb_wrapper">
                                    <div class="w-image align_center">
                                        <div class="w-image-h"><img width="1024" height="635" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-1024x635.png" class="attachment-large size-large lazyloaded" alt="" data-lazy-srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-1024x635.png 1024w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-300x186.png 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-1536x953.png 1536w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-600x372.png 600w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-768x477.png 768w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-200x124.png 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-400x248.png 400w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-150x93.png 150w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02.png 1642w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-1024x635.png" sizes="(max-width: 1024px) 100vw, 1024px" srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-1024x635.png 1024w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-300x186.png 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-1536x953.png 1536w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-600x372.png 600w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-768x477.png 768w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-200x124.png 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-400x248.png 400w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-150x93.png 150w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02.png 1642w" data-was-processed="true"><noscript><img width="1024" height="635" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-1024x635.png" class="attachment-large size-large" alt="" srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-1024x635.png 1024w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-300x186.png 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-1536x953.png 1536w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-600x372.png 600w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-768x477.png 768w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-200x124.png 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-400x248.png 400w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02-150x93.png 150w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/NV_Web_nuestra_gente_02.png 1642w" sizes="(max-width: 1024px) 100vw, 1024px" /></noscript></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="l-section wpb_row us_custom_6df4bc3a height_full valign_top has_text_color with_img with_overlay ult-vc-hide-row vc_row-has-fill parallax_fixed" id="intro" data-rtl="false" style="position: relative;" data-row-effect-mobile-disable="true">
                <div class="ult-vc-seperator bottom_seperator ult-xlarge-triangle uvc-seperator-9644170674430" data-full-width="true" data-border="undefined" data-border-width="undefined">
                    <div class="ult-main-seperator-inner"><svg class="uvc-x-large-triangle" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="#f2f2f2" width="100%" height="142" viewBox="0 0 4.66666 0.333331" preserveAspectRatio="none" style="height: 142px;">
                            <path class="fil0" d="M-0 0.333331l4.66666 0 0 -3.93701e-006 -2.33333 0 -2.33333 0 0 3.93701e-006zm0 -0.333331l4.66666 0 0 0.166661 -4.66666 0 0 -0.166661zm4.66666 0.332618l0 -0.165953 -4.66666 0 0 0.165953 1.16162 -0.0826181 1.17171 -0.0833228 1.17171 0.0833228 1.16162 0.0826181z"></path>
                        </svg></div>
                    <div class="separator-icon"></div>
                </div>
                <div class="upb_row_bg" data-bg-override="0" style="background: rgb(212, 61, 103); min-width: 1366px; left: 0px; width: 1365px;"></div>
                <div data-bg="url(https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/04/NV_background.jpg)" class="l-section-img rocket-lazyload loaded" style="background-repeat: no-repeat; background-position: 50% 50%;" data-img-width="1920" data-img-height="1100"></div>
                <div class="l-section-overlay" style="background: rgba(178,42,91,0.5)"></div>
                <div class="l-section-h i-cf">
                    <div class="g-cols vc_row type_default valign_middle">
                        <div class="vc_col-sm-12 wpb_column vc_column_container">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="g-cols wpb_row us_custom_72fc42ef type_default valign_top vc_inner" id="heading-position">
                                        <div class="vc_col-sm-12 vc_hidden-xs wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column">
                                                        <div class="wpb_wrapper">
                                                            <h1 class="heading-img" style="text-align: center;"><strong>¡Ampliamos NUESTRA Cobertura!</strong></h1>
                                                        </div>
                                                    </div>
                                                    <h2 style="text-align: center;font-family:Lato;font-weight:700;font-style:normal" class="vc_custom_heading subheading">AHORA EN VIVO en éstas áreas.</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-cols wpb_row us_custom_8c42ed40 type_default valign_top vc_inner" id="ampliamos-header-mobile">
                                        <div class="vc_col-sm-12 vc_hidden-lg vc_hidden-md vc_hidden-sm wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column" id="headertitle_mobile">
                                                        <div class="wpb_wrapper">
                                                            <h1 style="text-align: center;"><strong>¡Ampliamos NUESTRA Cobertura!</strong></h1>
                                                        </div>
                                                    </div>
                                                    <h4 style="font-size: 22px;text-align: center;font-family:Lato;font-weight:700;font-style:normal" class="vc_custom_heading subheading us_custom_dcf82f55">AHORA EN VIVO en éstas áreas.</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-separator size_medium"></div>
                                    <div class="wpb_text_column us_custom_f4e98152">
                                        <div class="wpb_wrapper">
                                            <div class="g-cols wpb_row type_default valign_middle vc_column-gap-5 vc_inner vc_custom_1535563195038 territories_container" id="areas_text">
                                                <div class="vc_col-sm-1/5 wpb_column vc_column_container has-fill territory_container_green" id="regions_col" style="color: #ffffff;">
                                                    <div class="vc_column-inner vc_custom_1533761865154 color_custom territory_green_box">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column " id="territory_link">
                                                                <div class="wpb_wrapper">
                                                                    <h5 style="text-align: center; font: regular bold Lato;"><strong>Los Angeles, CA<br> Canal: 20-3</strong></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_col-sm-1/5 wpb_column vc_column_container has-fill territory_container_red" id="regions_col">
                                                    <div class="vc_column-inner vc_custom_1533761877753 territory_red_box">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column" id="territory_link">
                                                                <div class="wpb_wrapper">
                                                                    <h5 style="text-align: center; font: regular bold Lato;"><strong>Houston, TX<br> Canal: 46-1</strong></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_col-sm-1/5 wpb_column vc_column_container has-fill territory_container_pink" id="regions_col">
                                                    <div class="vc_column-inner vc_custom_1533761821469 territory_purple_box">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column" id="territory_link">
                                                                <div class="wpb_wrapper">
                                                                    <h5 style="text-align: center; font: regular bold Lato;"><strong>Phoenix, AZ<br> Canal: 50-1</strong></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_col-sm-1/5 wpb_column vc_column_container has-fill territory_container_blue" id="regions_col">
                                                    <div class="vc_column-inner vc_custom_1533761903260 territory_blue_box">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column " id="territory_link">
                                                                <div class="wpb_wrapper">
                                                                    <h5 style="text-align: center; font: regular bold Lato;"><strong>McAllen, TX<br> Canal: 69-1</strong></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_col-sm-1/5 wpb_column vc_column_container has-fill territory_container_green" id="regions_col">
                                                    <div class="vc_column-inner vc_custom_1533762003366 territory_green_box">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column " id="territory_link">
                                                                <div class="wpb_wrapper">
                                                                    <h5 style="text-align: center; font: regular bold Lato;"><strong>Orlando, FL<br> Canal: 21-1</strong></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p></p>
                                            <div class="g-cols wpb_row type_default valign_middle vc_column-gap-5 vc_inner vc_custom_1535563237170 territories_container" id="areas_text">
                                                <div class="vc_col-sm-1/5 wpb_column vc_column_container has-fill territory_container_red" id="regions_col">
                                                    <div class="vc_column-inner vc_custom_1533761877753 territory_red_box">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column" id="territory_link">
                                                                <div class="wpb_wrapper">
                                                                    <h5 style="text-align: center; font: regular bold Lato;"><strong>Fresno, CA<br> Canal: 32-1</strong></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_col-sm-1/5 wpb_column vc_column_container has-fill territory_container_pink" id="regions_col">
                                                    <div class="vc_column-inner vc_custom_1533762003366 territory_purple_box">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column " id="territory_link">
                                                                <div class="wpb_wrapper">
                                                                    <h5 style="text-align: center; font: regular bold Lato;"><strong>San Diego, CA<br> Canal: 50-1</strong></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_col-sm-1/5 wpb_column vc_column_container has-fill territory_container_blue" id="regions_col">
                                                    <div class="vc_column-inner vc_custom_1533762014052 territory_blue_box">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column " id="territory_link">
                                                                <div class="wpb_wrapper">
                                                                    <h5 style="text-align: center; font: regular bold Lato;"><strong>Salt Lake City, UT<br> Canal: 25-1</strong></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_col-sm-1/5 wpb_column vc_column_container has-fill territory_container_green" id="regions_col" style="color: #ffffff;">
                                                    <div class="vc_column-inner vc_custom_1533762025653 color_custom territory_green_box">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column " id="territory_link">
                                                                <div class="wpb_wrapper">
                                                                    <h5 style="text-align: center; font: regular bold Lato;"><strong>Odessa, TX<br> Canal: 30-5</strong></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_col-sm-1/5 wpb_column vc_column_container has-fill territory_container_red" id="regions_col" style="color: #ffffff;">
                                                    <div class="vc_column-inner vc_custom_1533762025653 color_custom territory_red_box">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column " id="territory_link">
                                                                <div class="wpb_wrapper">
                                                                    <h5 style="text-align: center; font: regular bold Lato;"><strong>Yakima, WA<br> Canal: 36-2</strong></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p></p>
                                            <div class="g-cols wpb_row type_default valign_middle vc_column-gap-5 vc_inner vc_custom_1535563245545 territories_container" id="areas_text">
                                                <div class="vc_col-sm-1/5 wpb_column vc_column_container has-fill territory_container_pink" id="regions_col">
                                                    <div class="vc_column-inner vc_custom_1533762036057 territory_purple_box">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column " id="territory_link">
                                                                <div class="wpb_wrapper">
                                                                    <h5 style="text-align: center; font: regular bold Lato;"><strong>Palm Springs, CA<br> Canal: 45-5</strong></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_col-sm-1/5 wpb_column vc_column_container has-fill territory_container_blue" id="regions_col">
                                                    <div class="vc_column-inner vc_custom_1533762057639 territory_blue_box">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column " id="territory_link">
                                                                <div class="wpb_wrapper">
                                                                    <h5 style="text-align: center; font: regular bold Lato;"><strong>Nashville, TN<br> Canal: 42-5</strong></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_col-sm-1/5 wpb_column vc_column_container has-fill territory_container_green" id="regions_col">
                                                    <div class="vc_column-inner vc_custom_1533762067852 territory_green_box">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column " id="territory_link">
                                                                <div class="wpb_wrapper">
                                                                    <h5 style="text-align: center; font: regular bold Lato;"><strong>Springfield, MO<br> Canal: 8-6</strong></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_col-sm-1/5 wpb_column vc_column_container has-fill territory_container_red" id="regions_col" style="color: #ffffff;">
                                                    <div class="vc_column-inner vc_custom_1533762046746 color_custom territory_red_box">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column " id="territory_link">
                                                                <div class="wpb_wrapper">
                                                                    <h5 style="text-align: center; font: regular bold Lato;"><strong>Columbus, OH<br> Canal: 32-4</strong></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_col-sm-1/5 wpb_column vc_column_container has-fill territory_container_pink" id="regions_col">
                                                    <div class="vc_column-inner vc_custom_1547735559367 territory_purple_box">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column " id="territory_link">
                                                                <div class="wpb_wrapper">
                                                                    <h5 style="text-align: center; font: regular bold Lato;"><strong>Pahrump, NV<br> Canal: 46</strong></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-separator size_large"></div>
                                    <div class="wpb_text_column">
                                        <div class="wpb_wrapper">
                                            <h4 style="text-align: center;">Actualmente Nuestra Vision se encuentra transmitiendo al aire en los Estados Unidos, produciendo programación innovadora que está hecha especialmente para la audiencia mexicana. Solo en Nuestra Vision encontrarás las mejores películas mexicanas de cada época. Desde películas en blanco y negro de la Época de Oro del Cine Mexicano hasta las producciones modernas.</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="l-section wpb_row us_custom_33fe73d0 height_medium ult-vc-hide-row vc_row-has-fill" data-rtl="false" style="position: relative;" data-row-effect-mobile-disable="true">
                <div class="upb_row_bg" data-bg-override="0" style="background: rgb(241, 241, 241); min-width: 1366px; left: 0px; width: 1365px;"></div>
                <div class="l-section-h i-cf">
                    <div class="g-cols vc_row type_default valign_top">
                        <div class="vc_col-sm-12 wpb_column vc_column_container">
                            <div class="vc_column-inner us_custom_4edece6e ">
                                <div class="wpb_wrapper">
                                    <div class="w-image us_custom_4edece6e align_center"><a class="w-image-h" href="https://nuestravision.tv/ascenso/" title="Ascenso"><img width="2560" height="316" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%202560%20316'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-scaled.jpg 2560w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-300x37.jpg 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-1024x127.jpg 1024w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-1536x190.jpg 1536w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-2048x253.jpg 2048w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-600x74.jpg 600w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-768x95.jpg 768w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-200x25.jpg 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-400x49.jpg 400w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-150x19.jpg 150w" data-lazy-sizes="(max-width: 2560px) 100vw, 2560px" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-scaled.jpg"><noscript><img width="2560" height="316" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-scaled.jpg" class="attachment-full size-full" alt="" srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-scaled.jpg 2560w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-300x37.jpg 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-1024x127.jpg 1024w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-1536x190.jpg 1536w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-2048x253.jpg 2048w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-600x74.jpg 600w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-768x95.jpg 768w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-200x25.jpg 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-400x49.jpg 400w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_SLP_Banner_Ascenso_20200209_01-150x19.jpg 150w" sizes="(max-width: 2560px) 100vw, 2560px" /></noscript></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="l-section wpb_row us_custom_4fb9e5a3 height_medium with_img with_overlay ult-vc-hide-row vc_row-has-fill" id="projects" data-rtl="false" style="position: relative;" data-row-effect-mobile-disable="true">
                <div class="upb_row_bg" data-bg-override="ex-full" style="background: rgb(255, 255, 255); min-width: 1366px; left: 0px; width: 1366px;"></div>
                <div data-bg="url(https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2018/08/backgrownd-grid.jpg)" class="l-section-img rocket-lazyload loaded" style="" data-img-width="1022" data-img-height="1024"></div>
                <div class="l-section-overlay" style="background: rgba(255,255,255,0.59)"></div>
                <div class="l-section-h i-cf">
                    <div class="g-cols vc_row type_boxes valign_top">
                        <div class="vc_col-sm-8 wpb_column vc_column_container">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <h3 style="text-align: left" class="vc_custom_heading subheading us_custom_0490361b" id="whatsnew">Esta semana no te pierdas:</h3>
                                    <div class="w-separator size_custom with_line width_default thick_2 style_solid color_secondary align_center" style="height:5;">
                                        <div class="w-separator-h"></div>
                                    </div>
                                    <h4 style="text-align: left" class="vc_custom_heading us_custom_0490361b">Películas</h4>
                                    <div class="w-separator size_custom with_line width_default thick_2 style_solid color_secondary align_center" style="height:5;">
                                        <div class="w-separator-h"></div>
                                    </div>
                                    <div class="g-cols wpb_row us_custom_0f8f44b7 type_default valign_top vc_inner" id="thumbnail_row">
                                        <div class="vc_col-sm-4 wpb_column vc_column_container" id="showOne">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column">
                                                        <div class="wpb_wrapper">
                                                            <p><a href="https://nuestravision.tv/14-de-febrero/"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20169'%3E%3C/svg%3E" alt="" width="300" height="169" class="aligncenter size-us_300_0 wp-image-9252" data-lazy-srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_14DeFebrero-300x169.jpg 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_14DeFebrero-200x113.jpg 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_14DeFebrero-150x84.jpg 150w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_14DeFebrero.jpg 400w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_14DeFebrero-300x169.jpg"><noscript><img src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_14DeFebrero-300x169.jpg" alt="" width="300" height="169" class="aligncenter size-us_300_0 wp-image-9252" srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_14DeFebrero-300x169.jpg 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_14DeFebrero-200x113.jpg 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_14DeFebrero-150x84.jpg 150w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_14DeFebrero.jpg 400w" sizes="(max-width: 300px) 100vw, 300px" /></noscript><span id="thumbnail-title">14 de Febrero</span></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column">
                                                        <div class="wpb_wrapper">
                                                            <p><a href="https://nuestravision.tv/dicen-que-soy-mujeriego"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20169'%3E%3C/svg%3E" alt="" width="300" height="169" class="aligncenter size-us_300_0 wp-image-9260" data-lazy-srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_DE_DicenQueSoyMujeriego-300x169.jpg 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_DE_DicenQueSoyMujeriego-200x113.jpg 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_DE_DicenQueSoyMujeriego-150x84.jpg 150w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_DE_DicenQueSoyMujeriego.jpg 400w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_DE_DicenQueSoyMujeriego-300x169.jpg"><noscript><img src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_DE_DicenQueSoyMujeriego-300x169.jpg" alt="" width="300" height="169" class="aligncenter size-us_300_0 wp-image-9260" srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_DE_DicenQueSoyMujeriego-300x169.jpg 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_DE_DicenQueSoyMujeriego-200x113.jpg 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_DE_DicenQueSoyMujeriego-150x84.jpg 150w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_DE_DicenQueSoyMujeriego.jpg 400w" sizes="(max-width: 300px) 100vw, 300px" /></noscript><span id="thumbnail-title">Domingo Estelar: Dicen Que Soy Mujeriego</span></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column">
                                                        <div class="wpb_wrapper">
                                                            <p><a href="https://nuestravision.tv/la-cucaracha/"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20169'%3E%3C/svg%3E" alt="" width="300" height="169" class="aligncenter size-us_300_0 wp-image-9259" data-lazy-srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_CD_LaCucaracha-300x169.jpg 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_CD_LaCucaracha-200x113.jpg 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_CD_LaCucaracha-150x84.jpg 150w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_CD_LaCucaracha.jpg 400w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_CD_LaCucaracha-300x169.jpg"><noscript><img src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_CD_LaCucaracha-300x169.jpg" alt="" width="300" height="169" class="aligncenter size-us_300_0 wp-image-9259" srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_CD_LaCucaracha-300x169.jpg 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_CD_LaCucaracha-200x113.jpg 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_CD_LaCucaracha-150x84.jpg 150w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_CD_LaCucaracha.jpg 400w" sizes="(max-width: 300px) 100vw, 300px" /></noscript><span id="thumbnail-title">La Cucaracha</span></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-separator size_small"></div>
                                    <div class="g-cols wpb_row us_custom_0f8f44b7 type_default valign_top vc_inner" id="thumbnail_row">
                                        <div class="vc_col-sm-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column">
                                                        <div class="wpb_wrapper">
                                                            <p><a href="https://nuestravision.tv/santo-contra-la-magia-negra/"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20169'%3E%3C/svg%3E" alt="" width="300" height="169" class="aligncenter size-us_300_0 wp-image-9262" data-lazy-srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_SantoContraLaMagiaNegra-300x169.jpg 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_SantoContraLaMagiaNegra-200x113.jpg 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_SantoContraLaMagiaNegra-150x84.jpg 150w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_SantoContraLaMagiaNegra.jpg 400w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_SantoContraLaMagiaNegra-300x169.jpg"><noscript><img src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_SantoContraLaMagiaNegra-300x169.jpg" alt="" width="300" height="169" class="aligncenter size-us_300_0 wp-image-9262" srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_SantoContraLaMagiaNegra-300x169.jpg 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_SantoContraLaMagiaNegra-200x113.jpg 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_SantoContraLaMagiaNegra-150x84.jpg 150w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_SantoContraLaMagiaNegra.jpg 400w" sizes="(max-width: 300px) 100vw, 300px" /></noscript><span id="thumbnail-title">Santo Contra la Magia Negra</span></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column">
                                                        <div class="wpb_wrapper">
                                                            <p><a href="https://nuestravision.tv/hoy-en-nuestra-vision/"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20169'%3E%3C/svg%3E" alt="" width="300" height="169" class="aligncenter size-us_300_0 wp-image-9256" data-lazy-srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_Carteleras_04_20200213-300x169.jpg 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_Carteleras_04_20200213-200x113.jpg 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_Carteleras_04_20200213-150x84.jpg 150w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_Carteleras_04_20200213.jpg 400w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_Carteleras_04_20200213-300x169.jpg"><noscript><img src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_Carteleras_04_20200213-300x169.jpg" alt="" width="300" height="169" class="aligncenter size-us_300_0 wp-image-9256" srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_Carteleras_04_20200213-300x169.jpg 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_Carteleras_04_20200213-200x113.jpg 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_Carteleras_04_20200213-150x84.jpg 150w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_Carteleras_04_20200213.jpg 400w" sizes="(max-width: 300px) 100vw, 300px" /></noscript><span id="thumbnail-title">¡Hoy en Nuestra Vision!</span></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column">
                                                        <div class="wpb_wrapper">
                                                            <p><a href="https://nuestravision.tv/noches-de-nuestra-vision/"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20169'%3E%3C/svg%3E" alt="" width="300" height="169" class="aligncenter size-us_300_0 wp-image-9258" data-lazy-srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_Carteleras_Nocturnas-300x169.jpg 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_Carteleras_Nocturnas-200x113.jpg 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_Carteleras_Nocturnas-150x84.jpg 150w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_Carteleras_Nocturnas.jpg 400w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_Carteleras_Nocturnas-300x169.jpg"><noscript><img src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_Carteleras_Nocturnas-300x169.jpg" alt="" width="300" height="169" class="aligncenter size-us_300_0 wp-image-9258" srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_Carteleras_Nocturnas-300x169.jpg 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_Carteleras_Nocturnas-200x113.jpg 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_Carteleras_Nocturnas-150x84.jpg 150w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Movie_Promo_Full_Carteleras_Nocturnas.jpg 400w" sizes="(max-width: 300px) 100vw, 300px" /></noscript><span id="thumbnail-title">Noches de Nuestra Vision</span></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-separator size_small"></div>
                                    <h4 style="text-align: left" class="vc_custom_heading us_custom_0490361b">Deportes y Programas</h4>
                                    <div class="w-separator size_small"></div>
                                    <div class="g-cols wpb_row type_default valign_top vc_inner" id="thumbnail_row">
                                        <div class="vc_col-sm-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column">
                                                        <div class="wpb_wrapper">
                                                            <p><a href="https://nuestravision.tv/aprende-corte-y-confeccion/"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20169'%3E%3C/svg%3E" alt="" width="300" height="169" class="aligncenter size-us_300_0 wp-image-9265" data-lazy-srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Show_Promo_Full_App_CorteYConfeccion_02-300x169.jpg 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Show_Promo_Full_App_CorteYConfeccion_02-200x113.jpg 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Show_Promo_Full_App_CorteYConfeccion_02-150x84.jpg 150w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Show_Promo_Full_App_CorteYConfeccion_02.jpg 400w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Show_Promo_Full_App_CorteYConfeccion_02-300x169.jpg"><noscript><img src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Show_Promo_Full_App_CorteYConfeccion_02-300x169.jpg" alt="" width="300" height="169" class="aligncenter size-us_300_0 wp-image-9265" srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Show_Promo_Full_App_CorteYConfeccion_02-300x169.jpg 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Show_Promo_Full_App_CorteYConfeccion_02-200x113.jpg 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Show_Promo_Full_App_CorteYConfeccion_02-150x84.jpg 150w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Show_Promo_Full_App_CorteYConfeccion_02.jpg 400w" sizes="(max-width: 300px) 100vw, 300px" /></noscript><span id="thumbnail-title">Aprende: Corte y Confección</span></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column">
                                                        <div class="wpb_wrapper">
                                                            <p><a href="https://nuestravision.tv/la-caja-de-pandora-alejandra-guzman/"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20169'%3E%3C/svg%3E" alt="" width="300" height="169" class="aligncenter size-us_300_0 wp-image-9266" data-lazy-srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Show_Promo_Full_LCP_AlejandraGuzman-300x169.jpg 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Show_Promo_Full_LCP_AlejandraGuzman-200x113.jpg 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Show_Promo_Full_LCP_AlejandraGuzman-150x84.jpg 150w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Show_Promo_Full_LCP_AlejandraGuzman.jpg 400w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Show_Promo_Full_LCP_AlejandraGuzman-300x169.jpg"><noscript><img src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Show_Promo_Full_LCP_AlejandraGuzman-300x169.jpg" alt="" width="300" height="169" class="aligncenter size-us_300_0 wp-image-9266" srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Show_Promo_Full_LCP_AlejandraGuzman-300x169.jpg 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Show_Promo_Full_LCP_AlejandraGuzman-200x113.jpg 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Show_Promo_Full_LCP_AlejandraGuzman-150x84.jpg 150w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Show_Promo_Full_LCP_AlejandraGuzman.jpg 400w" sizes="(max-width: 300px) 100vw, 300px" /></noscript><span id="thumbnail-title">La Caja de Pandora: Alejandra Guzmán</span></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column">
                                                        <div class="wpb_wrapper">
                                                            <p><a href="https://nuestravision.tv/mma-lux-fronton-008-sergio-drako-cossio-vs-hugo-flores/"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20169'%3E%3C/svg%3E" alt="" width="300" height="169" class="aligncenter size-us_300_0 wp-image-9251" data-lazy-srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Sports_Promo_Full_LUX008-300x169.jpg 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Sports_Promo_Full_LUX008-200x113.jpg 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Sports_Promo_Full_LUX008-150x84.jpg 150w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Sports_Promo_Full_LUX008.jpg 400w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Sports_Promo_Full_LUX008-300x169.jpg"><noscript><img src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Sports_Promo_Full_LUX008-300x169.jpg" alt="" width="300" height="169" class="aligncenter size-us_300_0 wp-image-9251" srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Sports_Promo_Full_LUX008-300x169.jpg 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Sports_Promo_Full_LUX008-200x113.jpg 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Sports_Promo_Full_LUX008-150x84.jpg 150w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/NV_Web_Sports_Promo_Full_LUX008.jpg 400w" sizes="(max-width: 300px) 100vw, 300px" /></noscript><span id="thumbnail-title">MMA Lux Fronton 008 Sergio “Drako” Cossio Vs Hugo Flores</span></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_col-sm-4 wpb_column vc_column_container">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_widgetised_column wpb_content_element">
                                        <div class="wpb_wrapper">
                                            <div id="timetable_upcoming_events-8" class="widget tt_upcoming_events_widget timetable_sidebar_box timetable_clearfix">
                                                <div class="tt_upcoming_events_widget">
                                                    <h5 class="box_header">Ahora</h5>
                                                    <div class="tt_upcoming_events_wrapper page_margin_top">
                                                        <ul class="tt_upcoming_events clearfix autoscroll-0">
                                                            <li><span class="tt_upcoming_events_event_container" style="border-left-color: #3cafef;color: #000000;" onmouseover="this.style.backgroundColor='#3cafef';this.style.borderColor='#3cafef';this.style.color='#000000';" onmouseout="this.style.backgroundColor='#FFF';this.style.borderColor='#EFEFEF';this.style.borderLeftColor='#3cafef';this.style.color='#000000';" title="Noticias en Vivo Gabriela Calzada">Noticias en Vivo Gabriela Calzada<span class="tt_upcoming_events_hours timetable_clearfix"><span class="tt_calendar_icon"></span>Jueves, 2:00 pm - 3:00 pm</span></span></li>
                                                        </ul>
                                                        <div class="tt_upcoming_event_controls"> <a href="#" id="upcoming_event_prev"><span class="tt_upcoming_event_prev_arrow"></span></a> <a href="#" id="upcoming_event_next"><span class="tt_upcoming_event_next_arrow"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="timetable_upcoming_events-10" class="widget tt_upcoming_events_widget timetable_sidebar_box timetable_clearfix">
                                                <div class="tt_upcoming_events_widget">
                                                    <h5 class="box_header">Más Tarde</h5>
                                                    <div class="tt_upcoming_events_wrapper page_margin_top">
                                                        <ul class="tt_upcoming_events clearfix autoscroll-0">
                                                            <li><span class="tt_upcoming_events_event_container" style="border-left-color: #f9c115;color: #000000;" onmouseover="this.style.backgroundColor='#f9c115';this.style.borderColor='#f9c115';this.style.color='#000000';" onmouseout="this.style.backgroundColor='#FFF';this.style.borderColor='#EFEFEF';this.style.borderLeftColor='#f9c115';this.style.color='#000000';" title="Marca Claro Radio">Marca Claro Radio<span class="tt_upcoming_events_hours timetable_clearfix"><span class="tt_calendar_icon"></span>Jueves, 3:00 pm - 4:00 pm</span></span></li>
                                                            <li><span class="tt_upcoming_events_event_container" style="border-left-color: #f9c115;color: #000000;" onmouseover="this.style.backgroundColor='#f9c115';this.style.borderColor='#f9c115';this.style.color='#000000';" onmouseout="this.style.backgroundColor='#FFF';this.style.borderColor='#EFEFEF';this.style.borderLeftColor='#f9c115';this.style.color='#000000';" title="Jugando Claro">Jugando Claro<span class="tt_upcoming_events_hours timetable_clearfix"><span class="tt_calendar_icon"></span>Jueves, 4:00 pm - 5:00 pm</span></span></li>
                                                            <li><span class="tt_upcoming_events_event_container" style="border-left-color: #c4af87;color: #000000;" onmouseover="this.style.backgroundColor='#c4af87';this.style.borderColor='#c4af87';this.style.color='#000000';" onmouseout="this.style.backgroundColor='#FFF';this.style.borderColor='#EFEFEF';this.style.borderLeftColor='#c4af87';this.style.color='#000000';" title="Aprende: Corte y Confección Parte 2">Aprende: Corte y Confección Parte 2<span class="tt_upcoming_events_hours timetable_clearfix"><span class="tt_calendar_icon"></span>Jueves, 5:00 pm - 6:00 pm</span></span></li>
                                                            <li><span class="tt_upcoming_events_event_container" style="border-left-color: #42e6f7;color: #000000;" onmouseover="this.style.backgroundColor='#42e6f7';this.style.borderColor='#42e6f7';this.style.color='#000000';" onmouseout="this.style.backgroundColor='#FFF';this.style.borderColor='#EFEFEF';this.style.borderLeftColor='#42e6f7';this.style.color='#000000';" title="Yo Quisiera: La cara oculta de Patricia">Yo Quisiera: La cara oculta de Patricia<span class="tt_upcoming_events_hours timetable_clearfix"><span class="tt_calendar_icon"></span>Jueves, 6:00 pm - 7:00 pm</span></span></li>
                                                            <li><span class="tt_upcoming_events_event_container" style="border-left-color: #10d0a3;color: #000000;" onmouseover="this.style.backgroundColor='#10d0a3';this.style.borderColor='#10d0a3';this.style.color='#000000';" onmouseout="this.style.backgroundColor='#FFF';this.style.borderColor='#EFEFEF';this.style.borderLeftColor='#10d0a3';this.style.color='#000000';" title="Santo Contra la Magia Negra">Santo Contra la Magia Negra<span class="tt_upcoming_events_hours timetable_clearfix"><span class="tt_calendar_icon"></span>Jueves, 7:00 pm - 9:30 pm</span></span></li>
                                                            <li><span class="tt_upcoming_events_event_container" style="border-left-color: #3cafef;color: #000000;" onmouseover="this.style.backgroundColor='#3cafef';this.style.borderColor='#3cafef';this.style.color='#000000';" onmouseout="this.style.backgroundColor='#FFF';this.style.borderColor='#EFEFEF';this.style.borderLeftColor='#3cafef';this.style.color='#000000';" title="Noticias en Vivo José Cárdenas">Noticias en Vivo José Cárdenas<span class="tt_upcoming_events_hours timetable_clearfix"><span class="tt_calendar_icon"></span>Jueves, 9:30 pm - 10:30 pm</span></span></li>
                                                            <li><span class="tt_upcoming_events_event_container" style="border-left-color: #42e6f7;color: #000000;" onmouseover="this.style.backgroundColor='#42e6f7';this.style.borderColor='#42e6f7';this.style.color='#000000';" onmouseout="this.style.backgroundColor='#FFF';this.style.borderColor='#EFEFEF';this.style.borderLeftColor='#42e6f7';this.style.color='#000000';" title="Dress Code">Dress Code<span class="tt_upcoming_events_hours timetable_clearfix"><span class="tt_calendar_icon"></span>Jueves, 10:30 pm - 11:15 pm</span></span></li>
                                                            <li><span class="tt_upcoming_events_event_container" style="border-left-color: #39da97;color: #000000;" onmouseover="this.style.backgroundColor='#39da97';this.style.borderColor='#39da97';this.style.color='#000000';" onmouseout="this.style.backgroundColor='#FFF';this.style.borderColor='#EFEFEF';this.style.borderLeftColor='#39da97';this.style.color='#000000';" title="Palabra de Cine: Enrique Guzmán Vargas">Palabra de Cine: Enrique Guzmán Vargas<span class="tt_upcoming_events_hours timetable_clearfix"><span class="tt_calendar_icon"></span>Jueves, 11:15 pm - 12:00 am</span></span></li>
                                                        </ul>
                                                        <div class="tt_upcoming_event_controls"> <a href="#" id="upcoming_event_prev"><span class="tt_upcoming_event_prev_arrow"></span></a> <a href="#" id="upcoming_event_next"><span class="tt_upcoming_event_next_arrow"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="w-separator size_medium"></div>
                                    <div class="g-cols wpb_row us_custom_bf2881af type_default valign_top vc_inner program_vids">
                                        <div class="vc_col-sm-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="w-image align_center"><a class="w-image-h" href="https://nuestravision.tv/nuestra-programacion/#deportes" title="channel promo"><img width="246" height="139" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20246%20139'%3E%3C/svg%3E" class="attachment-us_300_0 size-us_300_0" alt="NuestraVision link to Deportes promo video" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2018/09/NV_Deportes.jpg"><noscript><img width="246" height="139" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2018/09/NV_Deportes.jpg" class="attachment-us_300_0 size-us_300_0" alt="NuestraVision link to Deportes promo video" /></noscript></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="w-image align_center"><a class="w-image-h" href="https://nuestravision.tv/nuestra-programacion/#entretenimiento" title="channel promo"><img width="246" height="139" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20246%20139'%3E%3C/svg%3E" class="attachment-us_300_0 size-us_300_0" alt="NuestraVision link to Entretenimiento promo video" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2018/09/NV_Entretenimiento.jpg"><noscript><img width="246" height="139" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2018/09/NV_Entretenimiento.jpg" class="attachment-us_300_0 size-us_300_0" alt="NuestraVision link to Entretenimiento promo video" /></noscript></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="w-image align_center"><a class="w-image-h" href="https://nuestravision.tv/nuestra-programacion/#infantil" title="channel promo"><img width="246" height="139" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20246%20139'%3E%3C/svg%3E" class="attachment-us_300_0 size-us_300_0" alt="NuestraVision link to Infantil promo video" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2018/09/NV_Infantil.jpg"><noscript><img width="246" height="139" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2018/09/NV_Infantil.jpg" class="attachment-us_300_0 size-us_300_0" alt="NuestraVision link to Infantil promo video" /></noscript></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-cols wpb_row us_custom_bf2881af type_default valign_top vc_inner program_vids">
                                        <div class="vc_col-sm-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="w-image align_center"><a class="w-image-h" href="https://nuestravision.tv/nuestra-programacion/#musica" title="channel promo"><img width="246" height="139" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20246%20139'%3E%3C/svg%3E" class="attachment-us_300_0 size-us_300_0" alt="NuestraVision link to Musica promo video" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2018/09/NV_Music.jpg"><noscript><img width="246" height="139" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2018/09/NV_Music.jpg" class="attachment-us_300_0 size-us_300_0" alt="NuestraVision link to Musica promo video" /></noscript></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="w-image align_center"><a class="w-image-h" href="https://nuestravision.tv/nuestra-programacion/#noticias" title="channel promo"><img width="246" height="139" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20246%20139'%3E%3C/svg%3E" class="attachment-us_300_0 size-us_300_0" alt="NuestraVision link to Notcias promo video" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2018/09/NV_Noticias.jpg"><noscript><img width="246" height="139" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2018/09/NV_Noticias.jpg" class="attachment-us_300_0 size-us_300_0" alt="NuestraVision link to Notcias promo video" /></noscript></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="w-image align_center"><a class="w-image-h" href="https://nuestravision.tv/nuestra-programacion/#cine" title="channel promo"><img width="246" height="139" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20246%20139'%3E%3C/svg%3E" class="attachment-us_300_0 size-us_300_0" alt="NuestraVision link to Cine promo video" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2018/09/NV_Cine.jpg"><noscript><img width="246" height="139" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2018/09/NV_Cine.jpg" class="attachment-us_300_0 size-us_300_0" alt="NuestraVision link to Cine promo video" /></noscript></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="l-section wpb_row us_custom_d5e12834 height_small has_text_color with_img" id="social-main-row">
                <div data-bg="url(https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/04/RA_pink-circle_3d_background_042119-e1573593523825.jpg)" class="l-section-img rocket-lazyload loaded" style="background-repeat: no-repeat;" data-img-width="1400" data-img-height="788"></div>
                <div class="l-section-h i-cf">
                    <div class="g-cols vc_row type_default valign_middle">
                        <div class="vc_col-sm-12 wpb_column vc_column_container">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="g-cols wpb_row type_default valign_top vc_inner" id="heading-position-2">
                                        <div class="vc_col-sm-12 vc_hidden-xs wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column us_custom_319574bd">
                                                        <div class="wpb_wrapper">
                                                            <h1 class="heading-img-2" style="text-align: center;"><strong> ¡Síguenos en Nuestras Redes!</strong></h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-cols wpb_row type_default valign_top vc_inner">
                                        <div class="vc_col-sm-12 vc_hidden-lg vc_hidden-md vc_hidden-sm wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column us_custom_319574bd" id="headertitle_mobile">
                                                        <div class="wpb_wrapper">
                                                            <h1 style="text-align: center;"><strong> ¡Síguenos en Nuestras Redes!</strong></h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-cols wpb_row us_custom_83615c4e type_boxes valign_top gap-1 vc_inner" id="social-row">
                                        <style>
                                            .g-cols.gap-1 {
                                                margin: 0 -1
                                            }

                                            .gap-1>.vc_column_container {
                                                padding: 1
                                            }
                                        </style>
                                        <div class="vc_col-sm-4 vc_hidden-xs wpb_column vc_column_container">
                                            <div class="vc_column-inner us_custom_1ba3d2bf ">
                                                <div class="wpb_wrapper">
                                                    <div class="w-socials us_custom_d8bb8f6f align_center style_colored hover_fade color_brand shape_square">
                                                        <div class="w-socials-list" style="margin:-20px;">
                                                            <div class="w-socials-item facebook" style="padding:20px;"><a class="w-socials-item-link" rel="noopener nofollow" target="_blank" href="https://www.facebook.com/nuestravision.tv" title="Facebook" aria-label="Facebook"><span class="w-socials-item-link-hover"></span></a>
                                                                <div class="w-socials-item-popup"><span>Facebook</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 vc_hidden-xs wpb_column vc_column_container">
                                            <div class="vc_column-inner us_custom_457f5000 ">
                                                <div class="wpb_wrapper">
                                                    <div class="w-socials us_custom_d8bb8f6f align_center style_colored hover_fade color_brand shape_square">
                                                        <div class="w-socials-list" style="margin:-0.1em;">
                                                            <div class="w-socials-item instagram" style="padding:0.1em;"><a class="w-socials-item-link" rel="noopener nofollow" target="_blank" href="https://www.instagram.com/nuestravisiontv/" title="Instagram" aria-label="Instagram"><span class="w-socials-item-link-hover"></span></a>
                                                                <div class="w-socials-item-popup"><span>Instagram</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 vc_hidden-xs wpb_column vc_column_container">
                                            <div class="vc_column-inner us_custom_1ba3d2bf ">
                                                <div class="wpb_wrapper">
                                                    <div class="w-socials us_custom_d8bb8f6f align_center style_colored hover_fade color_brand shape_square">
                                                        <div class="w-socials-list" style="margin:-0.1em;">
                                                            <div class="w-socials-item twitter" style="padding:0.1em;"><a class="w-socials-item-link" rel="noopener nofollow" target="_blank" href="https://twitter.com/nuestravisionmx" title="Twitter" aria-label="Twitter"><span class="w-socials-item-link-hover"></span></a>
                                                                <div class="w-socials-item-popup"><span>Twitter</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-cols wpb_row us_custom_43d836d8 type_boxes valign_top gap-1 vc_inner">
                                        <style>
                                            .g-cols.gap-1 {
                                                margin: 0 -1
                                            }

                                            .gap-1>.vc_column_container {
                                                padding: 1
                                            }
                                        </style>
                                        <div class="vc_col-sm-4 vc_hidden-lg vc_hidden-md vc_hidden-sm vc_col-xs-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner us_custom_fa568d0f ">
                                                <div class="wpb_wrapper">
                                                    <div class="w-socials us_custom_785e50b2 align_center style_colored hover_fade color_brand shape_square">
                                                        <div class="w-socials-list" style="margin:-20px;">
                                                            <div class="w-socials-item facebook" style="padding:20px;"><a class="w-socials-item-link" rel="noopener nofollow" target="_blank" href="https://www.facebook.com/nuestravision.tv" title="Facebook" aria-label="Facebook"><span class="w-socials-item-link-hover"></span></a>
                                                                <div class="w-socials-item-popup"><span>Facebook</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 vc_hidden-lg vc_hidden-md vc_hidden-sm vc_col-xs-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner us_custom_fa568d0f ">
                                                <div class="wpb_wrapper">
                                                    <div class="w-socials us_custom_785e50b2 align_center style_colored hover_fade color_brand shape_square">
                                                        <div class="w-socials-list" style="margin:-0.1em;">
                                                            <div class="w-socials-item instagram" style="padding:0.1em;"><a class="w-socials-item-link" rel="noopener nofollow" target="_blank" href="https://www.instagram.com/nuestravisiontv/" title="Instagram" aria-label="Instagram"><span class="w-socials-item-link-hover"></span></a>
                                                                <div class="w-socials-item-popup"><span>Instagram</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 vc_hidden-lg vc_hidden-md vc_hidden-sm vc_col-xs-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner us_custom_fa568d0f ">
                                                <div class="wpb_wrapper">
                                                    <div class="w-socials us_custom_785e50b2 align_center style_colored hover_fade color_brand shape_square">
                                                        <div class="w-socials-list" style="margin:-0.1em;">
                                                            <div class="w-socials-item twitter" style="padding:0.1em;"><a class="w-socials-item-link" rel="noopener nofollow" target="_blank" href="https://twitter.com/nuestravisionmx" title="Twitter" aria-label="Twitter"><span class="w-socials-item-link-hover"></span></a>
                                                                <div class="w-socials-item-popup"><span>Twitter</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="l-section wpb_row us_custom_6df4bc3a height_small has_text_color with_img parallax_fixed" id="asi-somos-row">
                <div data-bg="url(https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/04/Zocalo-Blue-e1573593374585.jpg)" class="l-section-img rocket-lazyload loaded" style="background-repeat: no-repeat;" data-img-width="1024" data-img-height="503"></div>
                <div class="l-section-h i-cf">
                    <div class="g-cols vc_row type_default valign_top">
                        <div class="vc_col-sm-12 wpb_column vc_column_container">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column us_custom_319574bd">
                                        <div class="wpb_wrapper">
                                            <h1 style="text-align: center; color: #ffffff;"><strong>&nbsp;Así Somos. </strong></h1>
                                            <h2 style="text-align: center; color: #ffffff;">Ofrecemos una propuesta única de contenido especialmente para ti que incluye películas, noticias, deportes y eventos especiales directamente desde México para tu hogar.</h2>
                                        </div>
                                    </div>
                                    <div class="w-separator size_small"></div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="g-cols wpb_row us_custom_43d836d8 type_boxes valign_top gap-1 vc_inner">
                                        <style>
                                            .g-cols.gap-1 {
                                                margin: 0 -1
                                            }

                                            .gap-1>.vc_column_container {
                                                padding: 1
                                            }
                                        </style>
                                        <div class="vc_col-sm-4 vc_hidden-xs wpb_column vc_column_container">
                                            <div class="vc_column-inner us_custom_8d45c27c ">
                                                <div class="wpb_wrapper">
                                                    <div class="w-counter us_custom_26d40d9c color_custom align_center counter-text" data-duration="2000">
                                                        <div class="w-counter-value"><span class="w-counter-value-part type_text" data-final=""></span><span class="w-counter-value-part type_number" data-final="7">7</span><span class="w-counter-value-part type_text" data-final=""></span></div>
                                                        <h3 class="w-counter-title">Días a la semana</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 vc_hidden-xs wpb_column vc_column_container">
                                            <div class="vc_column-inner us_custom_d8ca1d4e ">
                                                <div class="wpb_wrapper">
                                                    <div class="w-counter us_custom_26d40d9c color_custom align_center counter-text" data-duration="2000">
                                                        <div class="w-counter-value"><span class="w-counter-value-part type_text" data-final=""></span><span class="w-counter-value-part type_number" data-final="24">24</span><span class="w-counter-value-part type_text" data-final=""></span></div>
                                                        <h3 class="w-counter-title">Horas al día</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 vc_hidden-xs wpb_column vc_column_container">
                                            <div class="vc_column-inner us_custom_8d45c27c ">
                                                <div class="wpb_wrapper">
                                                    <div class="w-counter us_custom_26d40d9c color_custom align_center counter-text" data-duration="2000">
                                                        <div class="w-counter-value"><span class="w-counter-value-part type_text" data-final=""></span><span class="w-counter-value-part type_number" data-final="365">365</span><span class="w-counter-value-part type_text" data-final=""></span></div>
                                                        <h3 class="w-counter-title">Días al año</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-cols wpb_row us_custom_43d836d8 type_boxes valign_top gap-1 vc_inner">
                                        <style>
                                            .g-cols.gap-1 {
                                                margin: 0 -1
                                            }

                                            .gap-1>.vc_column_container {
                                                padding: 1
                                            }
                                        </style>
                                        <div class="vc_col-sm-4 vc_hidden-lg vc_hidden-md vc_hidden-sm vc_col-xs-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner us_custom_8d45c27c ">
                                                <div class="wpb_wrapper">
                                                    <div class="w-counter us_custom_e66d670a color_custom align_center counter-text" data-duration="2000">
                                                        <div class="w-counter-value"><span class="w-counter-value-part type_text" data-final=""></span><span class="w-counter-value-part type_number" data-final="7">7</span><span class="w-counter-value-part type_text" data-final=""></span></div>
                                                        <h3 class="w-counter-title" style="font-size:0.7em;">Días a la semana</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 vc_hidden-lg vc_hidden-md vc_hidden-sm vc_col-xs-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner us_custom_8d45c27c ">
                                                <div class="wpb_wrapper">
                                                    <div class="w-counter us_custom_e66d670a color_custom align_center counter-text" data-duration="2000">
                                                        <div class="w-counter-value"><span class="w-counter-value-part type_text" data-final=""></span><span class="w-counter-value-part type_number" data-final="24">24</span><span class="w-counter-value-part type_text" data-final=""></span></div>
                                                        <h3 class="w-counter-title" style="font-size:0.7em;">Horas al día</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 vc_hidden-lg vc_hidden-md vc_hidden-sm vc_col-xs-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner us_custom_8d45c27c ">
                                                <div class="wpb_wrapper">
                                                    <div class="w-counter us_custom_e66d670a color_custom align_center counter-text" data-duration="2000">
                                                        <div class="w-counter-value"><span class="w-counter-value-part type_text" data-final=""></span><span class="w-counter-value-part type_number" data-final="365">365</span><span class="w-counter-value-part type_text" data-final=""></span></div>
                                                        <h3 class="w-counter-title" style="font-size:0.7em;">Días al año</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="l-section wpb_row height_medium with_img">
                <div data-bg="url(https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/04/NV_GrayBackground_Image.png)" class="l-section-img rocket-lazyload loaded" style="" data-img-width="2499" data-img-height="1768"></div>
                <div class="l-section-h i-cf">
                    <div class="g-cols vc_row type_default valign_top">
                        <div class="vc_col-sm-12 wpb_column vc_column_container">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column">
                                        <div class="wpb_wrapper">
                                            <h2 style="text-align: center;"><strong>¿QUIÉNES SOMOS?</strong></h2>
                                            <h3 style="text-align: center;">Nuestra Vision, Claro Sports y Uno TV son marcas de la familia América Móvil, el proveedor líder de servicios integrados de telecomunicaciones en América Latina y el tercero más importante en el mundo en términos de subscriptores (NYSE: AMX).</h3>
                                        </div>
                                    </div>
                                    <div class="g-cols wpb_row type_default valign_top vc_inner">
                                        <div class="vc_col-sm-4 vc_col-xs-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="w-image align_center"><a class="w-image-h" href="http://www.americamovil.com/English/overview/default.aspx" target="_blank" rel="noopener"><img width="768" height="593" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20768%20593'%3E%3C/svg%3E" class="attachment-us_768_0 size-us_768_0" alt="This image link opens a new window to América Móvil website." data-lazy-srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/AmericaMovil_Logo_768px-opt-768x593.png 768w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/AmericaMovil_Logo_768px-opt-300x232.png 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/AmericaMovil_Logo_768px-opt-600x464.png 600w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/AmericaMovil_Logo_768px-opt-200x155.png 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/AmericaMovil_Logo_768px-opt-400x309.png 400w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/AmericaMovil_Logo_768px-opt.png 792w" data-lazy-sizes="(max-width: 768px) 100vw, 768px" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/AmericaMovil_Logo_768px-opt-768x593.png"><noscript><img width="768" height="593" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/AmericaMovil_Logo_768px-opt-768x593.png" class="attachment-us_768_0 size-us_768_0" alt="This image link opens a new window to América Móvil website." srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/AmericaMovil_Logo_768px-opt-768x593.png 768w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/AmericaMovil_Logo_768px-opt-300x232.png 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/AmericaMovil_Logo_768px-opt-600x464.png 600w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/AmericaMovil_Logo_768px-opt-200x155.png 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/AmericaMovil_Logo_768px-opt-400x309.png 400w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/AmericaMovil_Logo_768px-opt.png 792w" sizes="(max-width: 768px) 100vw, 768px" /></noscript></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 vc_col-xs-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="w-image align_center"><a class="w-image-h" href="http://www.clarosports.com" target="_blank" rel="noopener"><img width="768" height="593" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20768%20593'%3E%3C/svg%3E" class="attachment-us_768_0 size-us_768_0" alt="This image link opens a new window to claro sport website." data-lazy-srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/ClaroSports_Logo_768px-opt-768x593.png 768w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/ClaroSports_Logo_768px-opt-300x232.png 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/ClaroSports_Logo_768px-opt-600x464.png 600w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/ClaroSports_Logo_768px-opt-200x155.png 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/ClaroSports_Logo_768px-opt-400x309.png 400w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/ClaroSports_Logo_768px-opt.png 792w" data-lazy-sizes="(max-width: 768px) 100vw, 768px" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/ClaroSports_Logo_768px-opt-768x593.png"><noscript><img width="768" height="593" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/ClaroSports_Logo_768px-opt-768x593.png" class="attachment-us_768_0 size-us_768_0" alt="This image link opens a new window to claro sport website." srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/ClaroSports_Logo_768px-opt-768x593.png 768w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/ClaroSports_Logo_768px-opt-300x232.png 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/ClaroSports_Logo_768px-opt-600x464.png 600w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/ClaroSports_Logo_768px-opt-200x155.png 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/ClaroSports_Logo_768px-opt-400x309.png 400w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/ClaroSports_Logo_768px-opt.png 792w" sizes="(max-width: 768px) 100vw, 768px" /></noscript></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 vc_col-xs-4 wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="w-image align_center"><a class="w-image-h" href="https://www.unotv.com/inicio/" target="_blank" rel="noopener"><img width="768" height="593" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20768%20593'%3E%3C/svg%3E" class="attachment-us_768_0 size-us_768_0" alt="This image link opens a new window to Uno TV website." data-lazy-srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/UnoTv_Logo_768px-opt.png 768w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/UnoTv_Logo_768px-opt-300x232.png 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/UnoTv_Logo_768px-opt-600x463.png 600w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/UnoTv_Logo_768px-opt-200x154.png 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/UnoTv_Logo_768px-opt-400x309.png 400w" data-lazy-sizes="(max-width: 768px) 100vw, 768px" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/UnoTv_Logo_768px-opt-768x593.png"><noscript><img width="768" height="593" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/UnoTv_Logo_768px-opt-768x593.png" class="attachment-us_768_0 size-us_768_0" alt="This image link opens a new window to Uno TV website." srcset="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/UnoTv_Logo_768px-opt.png 768w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/UnoTv_Logo_768px-opt-300x232.png 300w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/UnoTv_Logo_768px-opt-600x463.png 600w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/UnoTv_Logo_768px-opt-200x154.png 200w, https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/UnoTv_Logo_768px-opt-400x309.png 400w" sizes="(max-width: 768px) 100vw, 768px" /></noscript></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-separator size_medium"></div>
                                    <div class="w-btn-wrapper width_auto align_center"><a class="w-btn us-btn-style_3 us_custom_84f29354 becomeaffiliate_btn" href="https://corporate.nuestravision.tv/#join-us-row"><span class="w-btn-label">Become An Affiliate Today!</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <footer id="page-footer" class="l-footer" itemscope="" itemtype="https://schema.org/WPFooter">
        <style data-type="us_custom-css">
            #intro h2,
            #intro h4,
            #intro h5 {
                color: #ffffff !important
            }

            @media screen and (max-width:768px) {

                #intro h1,
                #social-main-row h1 {
                    color: #ffffff !important
                }
            }

            #asi-somos-row .w-counter-title {
                color: #ffffff !important
            }

            #thumbnail_row img {
                width: 100%
            }

            #thumbnail_row a {
                outline: 0
            }

            span#thumbnail-title {
                margin: 5px 0 10px 0;
                display: block;
                font-size: 15px;
                line-height: 20px
            }

            .w-socials-item-link {
                line-height: 4.5em;
                width: 4.5em
            }

            .w-socials-item.facebook .w-socials-item-link:after,
            .w-socials-item.instagram .w-socials-item-link:after,
            .w-socials-item.twitter .w-socials-item-link:after {
                font-size: 2em
            }

            .heading-img,
            .heading-img-2 {
                color: #d43d67 !important
            }

            .heading-img {
                background: url(https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/04/NV_Pleca-3.png) center no-repeat;
                background-size: cover
            }

            h1.heading-img {
                padding: 50px 0
            }

            .heading-img-2 {
                background: url(https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/04/NV_Pleca-4.png) center no-repeat;
                background-size: cover
            }

            h1.heading-img-2 {
                padding: 35px 0
            }

            #heading-position-2 {
                position: relative;
                top: -100px
            }

            h4,
            .widgettitle {
                font-weight: 400px !important
            }

            #whatsnew {
                font-weight: 700
            }

            #intro .l-section-h {
                padding-bottom: 0;
                padding-top: 0px !important
            }

            .linkwrap {
                display: inline-block
            }

            .blocker {
                position: absolute;
                height: 100%;
                width: 100%;
                z-index: 3;
                top: 0;
                left: 0;
                background: rgba(255, 0, 0, 0)
            }

            .linkwrap iframe {
                z-index: 2
            }

            #availability_text h3,
            #availability_text h4 {
                color: #fff;
                text-align: center;
                padding-bottom: 0.5rem !important
            }

            section#intro {
                padding-bottom: 150px
            }

            #areas_text h5 {
                margin-bottom: -5px
            }

            .regions_col {
                padding: 0
            }

            #regions_col div.vc_column-inner {
                border: 3px solid #fff;
                box-shadow: 1px 1px 10px #00000047;
                margin: 1px
            }

            .territory_green_box {
                background-color: #10d0a3
            }

            .territory_red_box {
                background-color: #da4265
            }

            .territory_purple_box {
                background-color: #d9398d
            }

            .territory_blue_box {
                background-color: #3cafef
            }

            .territory_container_green>div,
            .territory_container_red>div,
            .territory_container_blue>div,
            .territory_container_pink>div {
                transition: all .4s ease-in-out;
                cursor: pointer
            }

            .territory_container_green>div:hover {
                background-color: #0e9a79 !important
            }

            .territory_container_red>div:hover {
                background-color: #a0304a !important
            }

            .territory_container_blue>div:hover {
                background-color: #318fc3 !important
            }

            .territory_container_pink>div:hover {
                background-color: #b32e74 !important
            }

            #headertitle_mobile {
                color: #fff;
                font-size: 30px
            }

            @media screen and (max-width:1024px) {

                h1.heading-img,
                h1.heading-img-2 {
                    font-size: 30px
                }

                #heading-position-2 {
                    top: -85px
                }

                .w-socials-item-link {
                    line-height: 2.5em;
                    width: 2.5em
                }

                .w-socials-item.facebook .w-socials-item-link:after,
                .w-socials-item.instagram .w-socials-item-link:after,
                .w-socials-item.twitter .w-socials-item-link:after {
                    font-size: 1.5em
                }
            }

            @media screen and (min-width:768px) {
                #mobile-hero-section {
                    display: none !important
                }

                #mobile-hero-section.l-section-h {
                    padding: 0 !important
                }

                .regions_col {
                    width: 90%;
                    margin: 0 auto 1rem
                }
            }

            @media screen and (max-width:767px) {
                #hero-section {
                    display: none !important
                }

                .territories_container {
                    margin: 0 .5em !important
                }
            }

            @media screen and (max-width:1024px) and (min-width:768px) {
                section#intro {
                    padding-bottom: 170px
                }
            }

            @media screen and (max-width:768px) and (min-width:641px) {
                section#intro {
                    padding-bottom: 140px
                }

                #areas_text h5 {
                    font-size: 15px
                }
            }

            @media screen and (max-width:641px) {
                section#intro {
                    padding-bottom: 70px
                }

                h1.heading-img,
                h1.heading-img-2 {
                    display: none
                }

                h3.subheading {
                    font-size: 25px !important
                }
            }
        </style>
        <style data-type="us_custom-css">
            .footer_sec #menu-footer-menu-1 li a {
                color: #a9a9a9 !important
            }

            .footer_sec h2,
            .footer_Sec a {
                color: #a9a9a9
            }

            .footer_sec ul {
                text-decoration: none;
                list-style-type: none
            }
        </style>
        <section class="l-section wpb_row us_custom_55bd4426 height_auto has_text_color">
            <div class="l-section-h i-cf">
                <div class="g-cols vc_row type_boxes valign_top">
                    <div class="vc_col-sm-4 vc_hidden-xs wpb_column vc_column_container footer_sec">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <h2 style="font-size: 22px;text-align: left" class="vc_custom_heading us_custom_49f317a8">Enlaces</h2>
                                <div class="wpb_text_column">
                                    <div class="wpb_wrapper">
                                        <ul style="list-style-type: none; margin-left: 0;">
                                            <li><a style="color: #a9a9a9;" href="https://nuestravision.tv/programming/">Programación</a></li>
                                            <li><a class="mpp-trigger-popup-2819 pointer" style="color: #a9a9a9;" href="#">¡Suscríbete!</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_col-sm-4 vc_hidden-xs wpb_column vc_column_container footer_sec">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <h2 style="font-size: 22px;text-align: left" class="vc_custom_heading us_custom_49f317a8">Distribución</h2>
                                <div class="wpb_text_column">
                                    <div class="wpb_wrapper">
                                        <ul style="list-style-type: none; margin-left: 0;">
                                            <li><a style="color: #a9a9a9;" href="https://corporate.nuestravision.tv/#join-us-row">Afiliaciones</a></li>
                                            <li><a style="color: #a9a9a9;" href="https://corporate.nuestravision.tv/#contact-row">¡Anúnciate!</a></li>
                                            <li><a style="color: #a9a9a9;" href="mailto:support@nuestravision.tv">Soporte</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_col-sm-4 vc_hidden-xs wpb_column vc_column_container footer_sec">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <h2 style="font-size: 22px;text-align: left" class="vc_custom_heading us_custom_49f317a8">NuestraVision.TV</h2>
                                <div class="wpb_text_column">
                                    <div class="wpb_wrapper">
                                        <ul style="list-style-type: none; margin-left: 0;">
                                            <li><a style="color: #a9a9a9;" href="https://corporate.nuestravision.tv/#contact-row">Contacto Corporativo</a></li>
                                            <li><a style="color: #a9a9a9;" href="https://nuestravision.tv/terms-of-services-and-privacy-policy/">Privacidad y Términos</a></li>
                                            <li><a style="color: #a9a9a9;" href="https://corporate.nuestravision.tv/#join-us-row">Publicidad y Ventas</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_col-sm-12 vc_hidden-xs wpb_column vc_column_container">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column">
                                    <div class="wpb_wrapper">
                                        <p style="text-align: center; color: #a9a9a9;">Nuestra Vision © 2015-2020 All Rights Reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-section wpb_row us_custom_55bd4426 height_auto has_text_color">
            <div class="l-section-h i-cf">
                <div class="g-cols vc_row type_boxes valign_top">
                    <div class="vc_col-sm-12 vc_hidden-lg vc_hidden-md vc_hidden-sm wpb_column vc_column_container footer_sec">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <h4 style="font-size: 22px;text-align: center" class="vc_custom_heading us_custom_49f317a8">Enlaces</h4>
                                <div class="wpb_text_column">
                                    <div class="wpb_wrapper">
                                        <ul style="list-style-type: none; margin-left: 0;">
                                            <li style="text-align: center;"><a style="color: #a9a9a9;" href="https://nuestravision.tv/programming/">Programación</a></li>
                                            <li style="text-align: center;"><a class="mpp-trigger-popup-2819 pointer" style="color: #a9a9a9;" href="#">¡Suscríbete!</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h4 style="font-size: 22px;text-align: center" class="vc_custom_heading us_custom_49f317a8">Distribución</h4>
                                <div class="wpb_text_column">
                                    <div class="wpb_wrapper">
                                        <ul style="list-style-type: none; margin-left: 0px; text-align: center;">
                                            <li><a style="color: #a9a9a9;" href="https://corporate.nuestravision.tv/#join-us-row">Afiliaciones</a></li>
                                            <li><a style="color: #a9a9a9;" href="https://corporate.nuestravision.tv/#contact-row">¡Anúnciate!</a></li>
                                            <li><a style="color: #a9a9a9;" href="mailto:support@nuestravision.tv">Soporte</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h4 style="font-size: 22px;text-align: center" class="vc_custom_heading us_custom_49f317a8">NuestraVision.TV</h4>
                                <div class="wpb_text_column">
                                    <div class="wpb_wrapper">
                                        <ul style="list-style-type: none; margin-left: 0;">
                                            <li style="text-align: center;"><a style="color: #a9a9a9;" href="https://corporate.nuestravision.tv/#contact-row">Contacto Corporativo</a></li>
                                            <li style="text-align: center;"><a style="color: #a9a9a9;" href="https://nuestravision.tv/terms-of-services-and-privacy-policy/">Privacidad y Términos</a></li>
                                            <li style="text-align: center;"><a style="color: #a9a9a9;" href="https://corporate.nuestravision.tv/#join-us-row">Publicidad y Ventas</a></li>
                                            <li style="text-align: center;"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="w-separator size_medium"></div>
                                <div class="wpb_text_column">
                                    <div class="wpb_wrapper">
                                        <p style="text-align: center; color: #a9a9a9;">Nuestra Vision © 2015-2020 All Rights Reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer> <a class="w-header-show" href="javascript:void(0);"><span>Menu</span></a>
    <div class="w-header-overlay"></div>
    <script>
        // Store some global theme options used in JS
        if (window.$us === undefined) {
            window.$us = {};
        }
        $us.canvasOptions = ($us.canvasOptions || {});
        $us.canvasOptions.disableEffectsWidth = 1025;
        $us.canvasOptions.columnsStackingWidth = 768;
        $us.canvasOptions.responsive = true;
        $us.canvasOptions.backToTopDisplay = 100;
        $us.canvasOptions.scrollDuration = 1000;

        $us.langOptions = ($us.langOptions || {});
        $us.langOptions.magnificPopup = ($us.langOptions.magnificPopup || {});
        $us.langOptions.magnificPopup.tPrev = 'Previous (Left arrow key)';
        $us.langOptions.magnificPopup.tNext = 'Next (Right arrow key)';
        $us.langOptions.magnificPopup.tCounter = '%curr% of %total%';

        $us.navOptions = ($us.navOptions || {});
        $us.navOptions.mobileWidth = 800;
        $us.navOptions.togglable = true;
        $us.ajaxLoadJs = true;
        $us.lazyLoad = false;
        $us.templateDirectoryUri = 'https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/themes/Impreza';
    </script>
    <script>
        if (window.$us === undefined) window.$us = {};
        $us.headerSettings = {
            "default": {
                "options": {
                    "breakpoint": "900",
                    "orientation": "hor",
                    "sticky": "1",
                    "scroll_breakpoint": "60px",
                    "transparent": "1",
                    "width": "300px",
                    "elm_align": "center",
                    "shadow": "thin",
                    "top_show": "0",
                    "top_height": "40px",
                    "top_sticky_height": "40px",
                    "top_fullwidth": "0",
                    "top_centering": "",
                    "middle_height": "60px",
                    "middle_sticky_height": "60px",
                    "middle_fullwidth": "1",
                    "middle_centering": "",
                    "elm_valign": "top",
                    "bg_img": "",
                    "bg_img_wrapper_start": "",
                    "bg_img_size": "cover",
                    "bg_img_repeat": "repeat",
                    "bg_img_position": "top left",
                    "bg_img_attachment": "1",
                    "bg_img_wrapper_end": "",
                    "bottom_show": "0",
                    "bottom_height": "50px",
                    "bottom_sticky_height": "50px",
                    "bottom_fullwidth": "0",
                    "bottom_centering": "",
                    "bgimage_wrapper_end": ""
                },
                "layout": {
                    "top_left": [],
                    "top_center": [],
                    "top_right": [],
                    "middle_left": ["image:1"],
                    "middle_center": [],
                    "middle_right": ["menu:1"],
                    "bottom_left": [],
                    "bottom_center": [],
                    "bottom_right": [],
                    "hidden": []
                }
            },
            "tablets": {
                "options": {
                    "breakpoint": "1200px",
                    "orientation": "hor",
                    "sticky": "1",
                    "scroll_breakpoint": "60px",
                    "transparent": "1",
                    "width": "300px",
                    "elm_align": "center",
                    "shadow": "thin",
                    "top_show": "0",
                    "top_height": "40px",
                    "top_sticky_height": "40px",
                    "top_fullwidth": "0",
                    "top_centering": "",
                    "middle_height": "80px",
                    "middle_sticky_height": "60px",
                    "middle_fullwidth": "0",
                    "middle_centering": "",
                    "elm_valign": "top",
                    "bg_img": "",
                    "bg_img_wrapper_start": "",
                    "bg_img_size": "cover",
                    "bg_img_repeat": "repeat",
                    "bg_img_position": "top left",
                    "bg_img_attachment": "1",
                    "bg_img_wrapper_end": "",
                    "bottom_show": "0",
                    "bottom_height": "50px",
                    "bottom_sticky_height": "50px",
                    "bottom_fullwidth": "0",
                    "bottom_centering": "",
                    "bgimage_wrapper_end": ""
                },
                "layout": {
                    "top_left": [],
                    "top_center": [],
                    "top_right": [],
                    "middle_left": ["image:1"],
                    "middle_center": [],
                    "middle_right": ["menu:1"],
                    "bottom_left": [],
                    "bottom_center": [],
                    "bottom_right": [],
                    "hidden": []
                }
            },
            "mobiles": {
                "options": {
                    "breakpoint": "813px",
                    "orientation": "hor",
                    "sticky": "1",
                    "scroll_breakpoint": "50px",
                    "transparent": "0",
                    "width": "300px",
                    "elm_align": "center",
                    "shadow": "thin",
                    "top_show": "0",
                    "top_height": "40px",
                    "top_sticky_height": "40px",
                    "top_fullwidth": "0",
                    "top_centering": "",
                    "middle_height": "50px",
                    "middle_sticky_height": "50px",
                    "middle_fullwidth": "0",
                    "middle_centering": "",
                    "elm_valign": "top",
                    "bg_img": "",
                    "bg_img_wrapper_start": "",
                    "bg_img_size": "cover",
                    "bg_img_repeat": "repeat",
                    "bg_img_position": "top left",
                    "bg_img_attachment": "1",
                    "bg_img_wrapper_end": "",
                    "bottom_show": "0",
                    "bottom_height": "50px",
                    "bottom_sticky_height": "50px",
                    "bottom_fullwidth": "0",
                    "bottom_centering": "",
                    "bgimage_wrapper_end": ""
                },
                "layout": {
                    "top_left": [],
                    "top_center": [],
                    "top_right": [],
                    "middle_left": ["image:1"],
                    "middle_center": [],
                    "middle_right": ["menu:1"],
                    "bottom_left": [],
                    "bottom_center": [],
                    "bottom_right": [],
                    "hidden": []
                }
            },
            "header_id": "2741"
        };
    </script>
    <script type="text/javascript">
        var MPP_POPUP_OPTIONS = MPP_POPUP_OPTIONS || {};
        var MPP_POPUP_DISPLAY_OPTIONS = MPP_POPUP_DISPLAY_OPTIONS || {};

        MPP_POPUP_DISPLAY_OPTIONS[8143] = {
            "id": 8143,
            "is_on": true,
            "should_display": false,
            "should_display_target": false,
            "should_display_by_publish_settings": true,
            "target": {
                "mpp_display-on-us_page_block": "off",
                "mpp_display-on-us_page_block-include": "",
                "mpp_display-on-us_page_block-exclude": "",
                "mpp_display-on-shows": "off",
                "mpp_display-on-shows-include": "",
                "mpp_display-on-shows-exclude": "",
                "mpp_display-on-all-site": "off",
                "mpp_display-on-homepage": "off",
                "mpp_display-on-archive": "off",
                "mpp_display-on-page": "off",
                "mpp_display-on-page-include": "",
                "mpp_display-on-page-exclude": "",
                "mpp_display-on-post": "off",
                "mpp_display-on-post-include": "",
                "mpp_display-on-post-exclude": "",
                "mpp_display-on-taxonomy-category": "off",
                "mpp_display-on-posts-with-taxonomy-category": "off",
                "mpp_display-on-taxonomy-category-terms": [],
                "mpp_display-on-taxonomy-post_tag": "off",
                "mpp_display-on-posts-with-taxonomy-post_tag": "off",
                "mpp_display-on-taxonomy-post_tag-terms": [],
                "mpp_display-on-specific-urls": "https:\/\/nuestravision.tv\/soporte\/",
                "mpp_display-on-specific-urls-exclude": "https:\/\/example.com\/exclude-page,\r\nhttps:\/\/example.com\/exclude-all-pages\/*,",
                "mpp_display-for-users": ["logged-in", "not-logged-in"],
                "mpp_display-on-devices": ["desktop", "tablet", "mobile"]
            },
            "triggers": {
                "mpp_trigger-open-on-click-event": "click",
                "mpp_trigger-open-on-click-custom-class": "your-custom-class",
                "mpp_trigger-open-on-click-prevent-default": "on",
                "mpp_trigger-open-on-load": "off",
                "mpp_trigger-open-on-load-delay": "1",
                "mpp_cookie-on-load": "off",
                "mpp_cookie-on-load-duration": "days",
                "mpp_cookie-on-load-days": "7",
                "mpp_trigger-open-on-exit": "off",
                "mpp_cookie-on-exit": "on",
                "mpp_cookie-on-exit-duration": "current_session",
                "mpp_cookie-on-exit-days": "7",
                "mpp_trigger-open-on-inactivity": "off",
                "mpp_trigger-open-on-inactivity-period": "60",
                "mpp_cookie-on-inactivity": "off",
                "mpp_cookie-on-inactivity-duration": "current_session",
                "mpp_cookie-on-inactivity-days": "7",
                "mpp_trigger-open-on-scroll": "off",
                "mpp_trigger-open-on-scroll-amount": "0",
                "mpp_trigger-open-on-scroll-amount_unit": "%",
                "mpp_trigger-open-on-scroll-after-post": "off",
                "mpp_trigger-open-on-scroll-selector": "",
                "mpp_cookie-on-scroll": "off",
                "mpp_cookie-on-scroll-duration": "days",
                "mpp_cookie-on-scroll-days": "7",
                "mpp_trigger-open-display-inline-in": [],
                "mpp_trigger-close-on-click-overlay": "on",
                "mpp_trigger-close-on-esc-keydown": "on",
                "mpp_trigger-close-automatically": "off",
                "mpp_trigger-close-automatically-delay": "10",
                "mpp_trigger-close-on-scroll": "off",
                "mpp_trigger-close-on-scroll-amount": "10",
                "mpp_trigger-close-on-scroll-amount_unit": "%",
                "mpp_trigger-close-on-scroll-up": "off",
                "mpp_trigger-close-on-scroll-up-amount": "10",
                "mpp_trigger-close-on-scroll-up-amount_unit": "%"
            }
        };

        MPP_POPUP_DISPLAY_OPTIONS[8125] = {
            "id": 8125,
            "is_on": true,
            "should_display": false,
            "should_display_target": false,
            "should_display_by_publish_settings": true,
            "target": {
                "mpp_display-on-us_page_block": "off",
                "mpp_display-on-us_page_block-include": "",
                "mpp_display-on-us_page_block-exclude": "",
                "mpp_display-on-shows": "off",
                "mpp_display-on-shows-include": "",
                "mpp_display-on-shows-exclude": "",
                "mpp_display-on-all-site": "off",
                "mpp_display-on-homepage": "off",
                "mpp_display-on-archive": "off",
                "mpp_display-on-page": "off",
                "mpp_display-on-page-include": "",
                "mpp_display-on-page-exclude": "",
                "mpp_display-on-post": "off",
                "mpp_display-on-post-include": "",
                "mpp_display-on-post-exclude": "",
                "mpp_display-on-taxonomy-category": "off",
                "mpp_display-on-posts-with-taxonomy-category": "off",
                "mpp_display-on-taxonomy-category-terms": [],
                "mpp_display-on-taxonomy-post_tag": "off",
                "mpp_display-on-posts-with-taxonomy-post_tag": "off",
                "mpp_display-on-taxonomy-post_tag-terms": [],
                "mpp_display-on-specific-urls": "https:\/\/nuestravision.tv\/soporte\/",
                "mpp_display-on-specific-urls-exclude": "https:\/\/example.com\/exclude-page,\r\nhttps:\/\/example.com\/exclude-all-pages\/*,",
                "mpp_display-for-users": ["logged-in", "not-logged-in"],
                "mpp_display-on-devices": ["desktop", "tablet", "mobile"]
            },
            "triggers": {
                "mpp_trigger-open-on-click-event": "click",
                "mpp_trigger-open-on-click-custom-class": "your-custom-class",
                "mpp_trigger-open-on-click-prevent-default": "on",
                "mpp_trigger-open-on-load": "off",
                "mpp_trigger-open-on-load-delay": "1",
                "mpp_cookie-on-load": "off",
                "mpp_cookie-on-load-duration": "days",
                "mpp_cookie-on-load-days": "7",
                "mpp_trigger-open-on-exit": "off",
                "mpp_cookie-on-exit": "on",
                "mpp_cookie-on-exit-duration": "current_session",
                "mpp_cookie-on-exit-days": "7",
                "mpp_trigger-open-on-inactivity": "off",
                "mpp_trigger-open-on-inactivity-period": "60",
                "mpp_cookie-on-inactivity": "off",
                "mpp_cookie-on-inactivity-duration": "current_session",
                "mpp_cookie-on-inactivity-days": "7",
                "mpp_trigger-open-on-scroll": "off",
                "mpp_trigger-open-on-scroll-amount": "0",
                "mpp_trigger-open-on-scroll-amount_unit": "%",
                "mpp_trigger-open-on-scroll-after-post": "off",
                "mpp_trigger-open-on-scroll-selector": "",
                "mpp_cookie-on-scroll": "off",
                "mpp_cookie-on-scroll-duration": "days",
                "mpp_cookie-on-scroll-days": "7",
                "mpp_trigger-open-display-inline-in": [],
                "mpp_trigger-close-on-click-overlay": "on",
                "mpp_trigger-close-on-esc-keydown": "on",
                "mpp_trigger-close-automatically": "off",
                "mpp_trigger-close-automatically-delay": "10",
                "mpp_trigger-close-on-scroll": "off",
                "mpp_trigger-close-on-scroll-amount": "10",
                "mpp_trigger-close-on-scroll-amount_unit": "%",
                "mpp_trigger-close-on-scroll-up": "off",
                "mpp_trigger-close-on-scroll-up-amount": "10",
                "mpp_trigger-close-on-scroll-up-amount_unit": "%"
            }
        };

        MPP_POPUP_DISPLAY_OPTIONS[2819] = {
            "id": 2819,
            "is_on": true,
            "should_display": true,
            "should_display_target": true,
            "should_display_by_publish_settings": true,
            "target": {
                "mpp_display-on-us_page_block": "on",
                "mpp_display-on-us_page_block-include": "",
                "mpp_display-on-us_page_block-exclude": "",
                "mpp_display-on-shows": "off",
                "mpp_display-on-shows-include": "",
                "mpp_display-on-shows-exclude": "",
                "mpp_display-on-all-site": "on",
                "mpp_display-on-homepage": "on",
                "mpp_display-on-archive": "on",
                "mpp_display-on-page": "on",
                "mpp_display-on-page-include": "",
                "mpp_display-on-page-exclude": "",
                "mpp_display-on-post": "on",
                "mpp_display-on-post-include": "",
                "mpp_display-on-post-exclude": "",
                "mpp_display-on-taxonomy-category": "off",
                "mpp_display-on-posts-with-taxonomy-category": "off",
                "mpp_display-on-taxonomy-category-terms": [],
                "mpp_display-on-taxonomy-post_tag": "off",
                "mpp_display-on-posts-with-taxonomy-post_tag": "off",
                "mpp_display-on-taxonomy-post_tag-terms": [],
                "mpp_display-on-specific-urls": "http:\/\/example.com,\r\nhttp:\/\/example.com\/shop\/*",
                "mpp_display-on-specific-urls-exclude": "https:\/\/example.com\/exclude-page,\r\nhttps:\/\/example.com\/exclude-all-pages\/*,",
                "mpp_display-for-users": ["logged-in", "not-logged-in"],
                "mpp_display-on-devices": ["desktop", "tablet", "mobile"]
            },
            "triggers": {
                "mpp_trigger-open-on-click-event": "click",
                "mpp_trigger-open-on-click-custom-class": "your-custom-class",
                "mpp_trigger-open-on-click-prevent-default": "on",
                "mpp_trigger-open-on-load": "off",
                "mpp_trigger-open-on-load-delay": "1",
                "mpp_cookie-on-load": "on",
                "mpp_cookie-on-load-duration": "current_session",
                "mpp_cookie-on-load-days": "7",
                "mpp_trigger-open-on-exit": "off",
                "mpp_cookie-on-exit": "off",
                "mpp_cookie-on-exit-duration": "current_session",
                "mpp_cookie-on-exit-days": "7",
                "mpp_trigger-open-on-inactivity": "off",
                "mpp_trigger-open-on-inactivity-period": "60",
                "mpp_cookie-on-inactivity": "off",
                "mpp_cookie-on-inactivity-duration": "current_session",
                "mpp_cookie-on-inactivity-days": "7",
                "mpp_trigger-open-on-scroll": "off",
                "mpp_trigger-open-on-scroll-amount": "0",
                "mpp_trigger-open-on-scroll-amount_unit": "%",
                "mpp_trigger-open-on-scroll-after-post": "off",
                "mpp_trigger-open-on-scroll-selector": "",
                "mpp_cookie-on-scroll": "off",
                "mpp_cookie-on-scroll-duration": "days",
                "mpp_cookie-on-scroll-days": "7",
                "mpp_trigger-open-display-inline-in": [],
                "mpp_trigger-close-on-click-overlay": "on",
                "mpp_trigger-close-on-esc-keydown": "on",
                "mpp_trigger-close-automatically": "off",
                "mpp_trigger-close-automatically-delay": "10",
                "mpp_trigger-close-on-scroll": "off",
                "mpp_trigger-close-on-scroll-amount": "10",
                "mpp_trigger-close-on-scroll-amount_unit": "%",
                "mpp_trigger-close-on-scroll-up": "off",
                "mpp_trigger-close-on-scroll-up-amount": "10",
                "mpp_trigger-close-on-scroll-up-amount_unit": "%"
            }
        };

        MPP_POPUP_OPTIONS[2819] = {
            "id": 2819,
            "position": "middle-center",
            "fullScreen": false,
            "mobileDesign": true,
            "ratioSmallDevices": 1,
            "list": {
                "service": "master_popups"
            },
            "afterConversion": {
                "message": ""
            },
            "wpEditor": {
                "enabled": false,
                "autoHeight": true,
                "padding": "20px 36px"
            },
            "sound": {
                "enabled": false,
                "delay": -10,
                "src": ""
            },
            "preloader": {
                "show": true,
                "duration": 1000
            },
            "open": {
                "delay": 0,
                "duration": 800,
                "animation": "mpp-zoomIn",
                "disablePageScroll": false
            },
            "close": {
                "delay": 0,
                "duration": 700,
                "animation": "mpp-zoomOut"
            },
            "overlay": {
                "show": true,
                "durationIn": 300,
                "durationOut": 250
            },
            "notificationBar": {
                "fixed": true,
                "pushPageDown": true,
                "fixedHeaderSelector": "",
                "containerPageSelector": ""
            },
            "sticky": {
                "enabled": false,
                "initial": false,
                "vertical": false
            },
            "inline": {
                "shouldClose": false
            },
            "desktop": {
                "device": "desktop",
                "browserWidth": 1080,
                "browserHeight": 480,
                "width": 640,
                "widthUnit": "px",
                "height": 360,
                "heightUnit": "px",
                "fullScreen": false
            },
            "mobile": {
                "device": "mobile",
                "browserWidth": 600,
                "browserHeight": 480,
                "width": 350,
                "widthUnit": "px",
                "height": 415,
                "heightUnit": "px",
                "fullScreen": false
            },
            "callbacks": [],
            "triggers": {
                "open": {
                    "onClick": {
                        "event": "click",
                        "customClass": "your-custom-class",
                        "preventDefault": true
                    },
                    "onLoad": {
                        "enabled": false,
                        "delay": 1000
                    },
                    "onExit": {
                        "enabled": false
                    },
                    "onInactivity": {
                        "enabled": false,
                        "period": 60000
                    },
                    "onScroll": {
                        "enabled": false,
                        "amount": "0%",
                        "afterPost": false,
                        "selector": "",
                        "displayed": false
                    }
                },
                "close": {
                    "onClickOverlay": true,
                    "onEscKeydown": true,
                    "automatically": {
                        "enabled": false,
                        "delay": 10000
                    },
                    "onScroll": {
                        "enabled": false,
                        "amount": "10%"
                    },
                    "onScrollUp": {
                        "enabled": false,
                        "amount": "10%"
                    }
                }
            },
            "cookies": {
                "onLoad": {
                    "name": "mpp_on_load_2819",
                    "enabled": true,
                    "duration": "current_session",
                    "days": 7
                },
                "onExit": {
                    "name": "mpp_on_exit_2819",
                    "enabled": false,
                    "duration": "current_session",
                    "days": 7
                },
                "onInactivity": {
                    "name": "mpp_on_inactivity_2819",
                    "enabled": false,
                    "duration": "current_session",
                    "days": 7
                },
                "onScroll": {
                    "name": "mpp_on_scroll_2819",
                    "enabled": false,
                    "duration": "days",
                    "days": 7
                },
                "onConversion": {
                    "name": "mpp_on_conversion_2819",
                    "enabled": true,
                    "duration": "days",
                    "days": 60
                }
            },
            "custom_cookies": [],
            "custom_cookies_on_click": [],
            "custom_cookie_on_close": ""
        };
        MPP_POPUP_OPTIONS[2819].callbacks.beforeOpen = function($, popup_instance, popup_id, options) {
            //console.log("Before Open Popup");
        };
        MPP_POPUP_OPTIONS[2819].callbacks.afterOpen = function($, popup_instance, popup_id, options) {
            //console.log("After Open Popup");
        };
        MPP_POPUP_OPTIONS[2819].callbacks.afterClose = function($, popup_instance, popup_id, options) {
            //console.log("After Close Popup");
        };
        MPP_POPUP_OPTIONS[2819].callbacks.onSubmit = function($, popup_instance, popup_id, options, success) {
            //console.log("After Form Submission");
        };

        MPP_POPUP_DISPLAY_OPTIONS[2816] = {
            "id": 2816,
            "is_on": true,
            "should_display": true,
            "should_display_target": true,
            "should_display_by_publish_settings": true,
            "target": {
                "mpp_display-on-us_page_block": "on",
                "mpp_display-on-us_page_block-include": "",
                "mpp_display-on-us_page_block-exclude": "",
                "mpp_display-on-shows": "on",
                "mpp_display-on-shows-include": "",
                "mpp_display-on-shows-exclude": "",
                "mpp_display-on-all-site": "on",
                "mpp_display-on-homepage": "on",
                "mpp_display-on-archive": "on",
                "mpp_display-on-page": "on",
                "mpp_display-on-page-include": "",
                "mpp_display-on-page-exclude": "",
                "mpp_display-on-post": "on",
                "mpp_display-on-post-include": "",
                "mpp_display-on-post-exclude": "",
                "mpp_display-on-taxonomy-category": "on",
                "mpp_display-on-posts-with-taxonomy-category": "off",
                "mpp_display-on-taxonomy-category-terms": [],
                "mpp_display-on-taxonomy-post_tag": "on",
                "mpp_display-on-posts-with-taxonomy-post_tag": "off",
                "mpp_display-on-taxonomy-post_tag-terms": [],
                "mpp_display-on-specific-urls": "http:\/\/example.com,\r\nhttp:\/\/example.com\/shop\/*",
                "mpp_display-on-specific-urls-exclude": "https:\/\/example.com\/exclude-page,\r\nhttps:\/\/example.com\/exclude-all-pages\/*,",
                "mpp_display-for-users": ["logged-in", "not-logged-in"],
                "mpp_display-on-devices": ["desktop", "tablet", "mobile"]
            },
            "triggers": {
                "mpp_trigger-open-on-click-event": "click",
                "mpp_trigger-open-on-click-custom-class": "your-custom-class",
                "mpp_trigger-open-on-click-prevent-default": "on",
                "mpp_trigger-open-on-load": "off",
                "mpp_trigger-open-on-load-delay": "1",
                "mpp_cookie-on-load": "off",
                "mpp_cookie-on-load-duration": "days",
                "mpp_cookie-on-load-days": "7",
                "mpp_trigger-open-on-exit": "off",
                "mpp_cookie-on-exit": "on",
                "mpp_cookie-on-exit-duration": "current_session",
                "mpp_cookie-on-exit-days": "7",
                "mpp_trigger-open-on-inactivity": "off",
                "mpp_trigger-open-on-inactivity-period": "60",
                "mpp_cookie-on-inactivity": "off",
                "mpp_cookie-on-inactivity-duration": "current_session",
                "mpp_cookie-on-inactivity-days": "7",
                "mpp_trigger-open-on-scroll": "off",
                "mpp_trigger-open-on-scroll-amount": "0",
                "mpp_trigger-open-on-scroll-amount_unit": "%",
                "mpp_trigger-open-on-scroll-after-post": "off",
                "mpp_trigger-open-on-scroll-selector": "",
                "mpp_cookie-on-scroll": "off",
                "mpp_cookie-on-scroll-duration": "days",
                "mpp_cookie-on-scroll-days": "7",
                "mpp_trigger-open-display-inline-in": [],
                "mpp_trigger-close-on-click-overlay": "on",
                "mpp_trigger-close-on-esc-keydown": "on",
                "mpp_trigger-close-automatically": "on",
                "mpp_trigger-close-automatically-delay": "3",
                "mpp_trigger-close-on-scroll": "off",
                "mpp_trigger-close-on-scroll-amount": "10",
                "mpp_trigger-close-on-scroll-amount_unit": "%",
                "mpp_trigger-close-on-scroll-up": "off",
                "mpp_trigger-close-on-scroll-up-amount": "10",
                "mpp_trigger-close-on-scroll-up-amount_unit": "%"
            }
        };

        MPP_POPUP_OPTIONS[2816] = {
            "id": 2816,
            "position": "middle-center",
            "fullScreen": false,
            "mobileDesign": true,
            "ratioSmallDevices": 1,
            "list": {
                "service": ""
            },
            "afterConversion": {
                "message": ""
            },
            "wpEditor": {
                "enabled": false,
                "autoHeight": true,
                "padding": "20px 36px"
            },
            "sound": {
                "enabled": false,
                "delay": -10,
                "src": ""
            },
            "preloader": {
                "show": true,
                "duration": 1000
            },
            "open": {
                "delay": 0,
                "duration": 800,
                "animation": "mpp-zoomIn",
                "disablePageScroll": false
            },
            "close": {
                "delay": 0,
                "duration": 700,
                "animation": "mpp-zoomOut"
            },
            "overlay": {
                "show": true,
                "durationIn": 300,
                "durationOut": 250
            },
            "notificationBar": {
                "fixed": true,
                "pushPageDown": true,
                "fixedHeaderSelector": "",
                "containerPageSelector": ""
            },
            "sticky": {
                "enabled": false,
                "initial": false,
                "vertical": false
            },
            "inline": {
                "shouldClose": false
            },
            "desktop": {
                "device": "desktop",
                "browserWidth": 1080,
                "browserHeight": 480,
                "width": 640,
                "widthUnit": "px",
                "height": 360,
                "heightUnit": "px",
                "fullScreen": false
            },
            "mobile": {
                "device": "mobile",
                "browserWidth": 600,
                "browserHeight": 480,
                "width": 300,
                "widthUnit": "px",
                "height": 315,
                "heightUnit": "px",
                "fullScreen": false
            },
            "callbacks": [],
            "triggers": {
                "open": {
                    "onClick": {
                        "event": "click",
                        "customClass": "your-custom-class",
                        "preventDefault": true
                    },
                    "onLoad": {
                        "enabled": false,
                        "delay": 1000
                    },
                    "onExit": {
                        "enabled": false
                    },
                    "onInactivity": {
                        "enabled": false,
                        "period": 60000
                    },
                    "onScroll": {
                        "enabled": false,
                        "amount": "0%",
                        "afterPost": false,
                        "selector": "",
                        "displayed": false
                    }
                },
                "close": {
                    "onClickOverlay": true,
                    "onEscKeydown": true,
                    "automatically": {
                        "enabled": true,
                        "delay": 3000
                    },
                    "onScroll": {
                        "enabled": false,
                        "amount": "10%"
                    },
                    "onScrollUp": {
                        "enabled": false,
                        "amount": "10%"
                    }
                }
            },
            "cookies": {
                "onLoad": {
                    "name": "mpp_on_load_2816",
                    "enabled": false,
                    "duration": "days",
                    "days": 7
                },
                "onExit": {
                    "name": "mpp_on_exit_2816",
                    "enabled": true,
                    "duration": "current_session",
                    "days": 7
                },
                "onInactivity": {
                    "name": "mpp_on_inactivity_2816",
                    "enabled": false,
                    "duration": "current_session",
                    "days": 7
                },
                "onScroll": {
                    "name": "mpp_on_scroll_2816",
                    "enabled": false,
                    "duration": "days",
                    "days": 7
                },
                "onConversion": {
                    "name": "mpp_on_conversion_2816",
                    "enabled": true,
                    "duration": "days",
                    "days": 60
                }
            },
            "custom_cookies": [],
            "custom_cookies_on_click": [],
            "custom_cookie_on_close": ""
        };
        MPP_POPUP_OPTIONS[2816].callbacks.beforeOpen = function($, popup_instance, popup_id, options) {
            //console.log("Before Open Popup");
        };
        MPP_POPUP_OPTIONS[2816].callbacks.afterOpen = function($, popup_instance, popup_id, options) {
            //console.log("After Open Popup");
        };
        MPP_POPUP_OPTIONS[2816].callbacks.afterClose = function($, popup_instance, popup_id, options) {
            //console.log("After Close Popup");
        };
        MPP_POPUP_OPTIONS[2816].callbacks.onSubmit = function($, popup_instance, popup_id, options, success) {
            //console.log("After Form Submission");
        };

        MPP_POPUP_DISPLAY_OPTIONS[2813] = {
            "id": 2813,
            "is_on": true,
            "should_display": true,
            "should_display_target": true,
            "should_display_by_publish_settings": true,
            "target": {
                "mpp_display-on-us_page_block": "on",
                "mpp_display-on-us_page_block-include": "",
                "mpp_display-on-us_page_block-exclude": "",
                "mpp_display-on-shows": "off",
                "mpp_display-on-shows-include": "",
                "mpp_display-on-shows-exclude": "",
                "mpp_display-on-all-site": "off",
                "mpp_display-on-homepage": "on",
                "mpp_display-on-archive": "off",
                "mpp_display-on-page": "off",
                "mpp_display-on-page-include": "",
                "mpp_display-on-page-exclude": "",
                "mpp_display-on-post": "off",
                "mpp_display-on-post-include": "",
                "mpp_display-on-post-exclude": "",
                "mpp_display-on-taxonomy-category": "off",
                "mpp_display-on-posts-with-taxonomy-category": "off",
                "mpp_display-on-taxonomy-category-terms": [],
                "mpp_display-on-taxonomy-post_tag": "off",
                "mpp_display-on-posts-with-taxonomy-post_tag": "off",
                "mpp_display-on-taxonomy-post_tag-terms": [],
                "mpp_display-on-specific-urls": "http:\/\/example.com,\r\nhttp:\/\/example.com\/shop\/*",
                "mpp_display-on-specific-urls-exclude": "https:\/\/example.com\/exclude-page,\r\nhttps:\/\/example.com\/exclude-all-pages\/*,",
                "mpp_display-for-users": ["logged-in", "not-logged-in"],
                "mpp_display-on-devices": ["desktop", "tablet", "mobile"]
            },
            "triggers": {
                "mpp_trigger-open-on-click-event": "click",
                "mpp_trigger-open-on-click-custom-class": "your-custom-class",
                "mpp_trigger-open-on-click-prevent-default": "on",
                "mpp_trigger-open-on-load": "on",
                "mpp_trigger-open-on-load-delay": "1",
                "mpp_cookie-on-load": "on",
                "mpp_cookie-on-load-duration": "current_session",
                "mpp_cookie-on-load-days": "7",
                "mpp_trigger-open-on-exit": "off",
                "mpp_cookie-on-exit": "off",
                "mpp_cookie-on-exit-duration": "current_session",
                "mpp_cookie-on-exit-days": "7",
                "mpp_trigger-open-on-inactivity": "off",
                "mpp_trigger-open-on-inactivity-period": "60",
                "mpp_cookie-on-inactivity": "off",
                "mpp_cookie-on-inactivity-duration": "current_session",
                "mpp_cookie-on-inactivity-days": "7",
                "mpp_trigger-open-on-scroll": "off",
                "mpp_trigger-open-on-scroll-amount": "0",
                "mpp_trigger-open-on-scroll-amount_unit": "%",
                "mpp_trigger-open-on-scroll-after-post": "off",
                "mpp_trigger-open-on-scroll-selector": "",
                "mpp_cookie-on-scroll": "off",
                "mpp_cookie-on-scroll-duration": "days",
                "mpp_cookie-on-scroll-days": "7",
                "mpp_trigger-open-display-inline-in": [],
                "mpp_trigger-close-on-click-overlay": "on",
                "mpp_trigger-close-on-esc-keydown": "on",
                "mpp_trigger-close-automatically": "off",
                "mpp_trigger-close-automatically-delay": "10",
                "mpp_trigger-close-on-scroll": "off",
                "mpp_trigger-close-on-scroll-amount": "10",
                "mpp_trigger-close-on-scroll-amount_unit": "%",
                "mpp_trigger-close-on-scroll-up": "off",
                "mpp_trigger-close-on-scroll-up-amount": "10",
                "mpp_trigger-close-on-scroll-up-amount_unit": "%"
            }
        };

        MPP_POPUP_OPTIONS[2813] = {
            "id": 2813,
            "position": "middle-center",
            "fullScreen": false,
            "mobileDesign": true,
            "ratioSmallDevices": 1,
            "list": {
                "service": "master_popups"
            },
            "afterConversion": {
                "message": ""
            },
            "wpEditor": {
                "enabled": false,
                "autoHeight": true,
                "padding": "20px 36px"
            },
            "sound": {
                "enabled": false,
                "delay": -10,
                "src": ""
            },
            "preloader": {
                "show": true,
                "duration": 1000
            },
            "open": {
                "delay": 0,
                "duration": 800,
                "animation": "mpp-zoomIn",
                "disablePageScroll": false
            },
            "close": {
                "delay": 0,
                "duration": 700,
                "animation": "mpp-zoomOut"
            },
            "overlay": {
                "show": true,
                "durationIn": 300,
                "durationOut": 250
            },
            "notificationBar": {
                "fixed": true,
                "pushPageDown": true,
                "fixedHeaderSelector": "",
                "containerPageSelector": ""
            },
            "sticky": {
                "enabled": false,
                "initial": false,
                "vertical": false
            },
            "inline": {
                "shouldClose": false
            },
            "desktop": {
                "device": "desktop",
                "browserWidth": 1080,
                "browserHeight": 480,
                "width": 640,
                "widthUnit": "px",
                "height": 360,
                "heightUnit": "px",
                "fullScreen": false
            },
            "mobile": {
                "device": "mobile",
                "browserWidth": 600,
                "browserHeight": 480,
                "width": 350,
                "widthUnit": "px",
                "height": 415,
                "heightUnit": "px",
                "fullScreen": false
            },
            "callbacks": [],
            "triggers": {
                "open": {
                    "onClick": {
                        "event": "click",
                        "customClass": "your-custom-class",
                        "preventDefault": true
                    },
                    "onLoad": {
                        "enabled": true,
                        "delay": 1000
                    },
                    "onExit": {
                        "enabled": false
                    },
                    "onInactivity": {
                        "enabled": false,
                        "period": 60000
                    },
                    "onScroll": {
                        "enabled": false,
                        "amount": "0%",
                        "afterPost": false,
                        "selector": "",
                        "displayed": false
                    }
                },
                "close": {
                    "onClickOverlay": true,
                    "onEscKeydown": true,
                    "automatically": {
                        "enabled": false,
                        "delay": 10000
                    },
                    "onScroll": {
                        "enabled": false,
                        "amount": "10%"
                    },
                    "onScrollUp": {
                        "enabled": false,
                        "amount": "10%"
                    }
                }
            },
            "cookies": {
                "onLoad": {
                    "name": "mpp_on_load_2813",
                    "enabled": true,
                    "duration": "current_session",
                    "days": 7
                },
                "onExit": {
                    "name": "mpp_on_exit_2813",
                    "enabled": false,
                    "duration": "current_session",
                    "days": 7
                },
                "onInactivity": {
                    "name": "mpp_on_inactivity_2813",
                    "enabled": false,
                    "duration": "current_session",
                    "days": 7
                },
                "onScroll": {
                    "name": "mpp_on_scroll_2813",
                    "enabled": false,
                    "duration": "days",
                    "days": 7
                },
                "onConversion": {
                    "name": "mpp_on_conversion_2813",
                    "enabled": true,
                    "duration": "days",
                    "days": 60
                }
            },
            "custom_cookies": [],
            "custom_cookies_on_click": [],
            "custom_cookie_on_close": ""
        };
        MPP_POPUP_OPTIONS[2813].callbacks.beforeOpen = function($, popup_instance, popup_id, options) {
            //console.log("Before Open Popup");
        };
        MPP_POPUP_OPTIONS[2813].callbacks.afterOpen = function($, popup_instance, popup_id, options) {
            //console.log("After Open Popup");
        };
        MPP_POPUP_OPTIONS[2813].callbacks.afterClose = function($, popup_instance, popup_id, options) {
            //console.log("After Close Popup");
        };
        MPP_POPUP_OPTIONS[2813].callbacks.onSubmit = function($, popup_instance, popup_id, options, success) {
            //console.log("After Form Submission");
        };

        /* Custom JS */
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.category a').removeAttr("ref")
            $('.category a').removeAttr("href")

            $('.territories_container').click(function() {
                window.location = 'https://nuestravision.tv/on-air-territories/';
            });
        });
    </script>
    <div class="mpp-container mpp-container-2819 mpp-container-position-middle-center">
        <div class="mpp-box mpp-popup mpp-popup-2819 mpp-position-middle-center " data-popup-id="2819" data-form-type="user-subscription">
            <div class="mpp-wrap mpp-wrap-2819">
                <div class="mpp-content">
                    <div class="mpp-content-desktop" style="overflow: visible">
                        <div class="mpp-element mpp-element-text-html mpp-desktop-element-0" title="" data-index="0" data-type="text-html" data-device="desktop" data-position="{&quot;top&quot;:&quot;56px&quot;,&quot;left&quot;:&quot;101px&quot;}" data-size="{&quot;width&quot;:&quot;auto&quot;,&quot;height&quot;:&quot;auto&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Arial&quot;,&quot;color&quot;:&quot;rgba(255,255,255, 1)&quot;,&quot;font-size&quot;:&quot;68px&quot;,&quot;font-weight&quot;:&quot;700&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;center&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;uppercase&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;0px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;0px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}">Suscríbete</div>
                        </div>
                        <div class="mpp-element mpp-element-text-html mpp-desktop-element-1" title="" data-index="1" data-type="text-html" data-device="desktop" data-position="{&quot;top&quot;:&quot;142px&quot;,&quot;left&quot;:&quot;114px&quot;}" data-size="{&quot;width&quot;:&quot;auto&quot;,&quot;height&quot;:&quot;auto&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(255,255,255, 1)&quot;,&quot;font-size&quot;:&quot;18px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;center&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;uppercase&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;0px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;0px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}">¡Te mantendremos al día de Nuestra Vision!</div>
                        </div>
                        <div class="mpp-element mpp-element-field_first_name mpp-desktop-element-2 mpp-form-element" title="" data-index="2" data-type="field_first_name" data-device="desktop" data-position="{&quot;top&quot;:&quot;180px&quot;,&quot;left&quot;:&quot;79px&quot;}" data-size="{&quot;width&quot;:&quot;223px&quot;,&quot;height&quot;:&quot;38px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="on" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(68, 68, 68, 1)&quot;,&quot;font-size&quot;:&quot;15px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;15px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;15px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;solid&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}"><input type="text" name="first_name" class="mpp-input" value="" placeholder="Nombre" tabindex="3" data-valid-characters="all" data-min-characters="-1" required=""><input type="hidden" name="mpp_field_first_name" value="field_first_name"></div>
                        </div>
                        <div class="mpp-element mpp-element-field_last_name mpp-desktop-element-3 mpp-form-element" title="" data-index="3" data-type="field_last_name" data-device="desktop" data-position="{&quot;top&quot;:&quot;180px&quot;,&quot;left&quot;:&quot;337px&quot;}" data-size="{&quot;width&quot;:&quot;223px&quot;,&quot;height&quot;:&quot;38px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="on" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(68, 68, 68, 1)&quot;,&quot;font-size&quot;:&quot;15px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;15px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;15px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;solid&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}"><input type="text" name="last_name" class="mpp-input" value="" placeholder="Apellido" tabindex="4" data-valid-characters="all" data-min-characters="-1" required=""><input type="hidden" name="mpp_field_last_name" value="field_last_name"></div>
                        </div>
                        <div class="mpp-element mpp-element-field_email mpp-desktop-element-4 mpp-form-element" title="" data-index="4" data-type="field_email" data-device="desktop" data-position="{&quot;top&quot;:&quot;237px&quot;,&quot;left&quot;:&quot;170px&quot;}" data-size="{&quot;width&quot;:&quot;300px&quot;,&quot;height&quot;:&quot;38px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="on" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(68, 68, 68, 1)&quot;,&quot;font-size&quot;:&quot;15px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;15px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;15px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;solid&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}"><input type="email" name="email" class="mpp-input" value="" placeholder="Email" tabindex="5" data-valid-characters="all" data-min-characters="-1" required=""><input type="hidden" name="mpp_field_email" value="field_email"></div>
                        </div>
                        <div class="mpp-element mpp-element-field_submit mpp-desktop-element-5 mpp-form-element" title="" tabindex="6" data-index="5" data-type="field_submit" data-device="desktop" data-position="{&quot;top&quot;:&quot;292px&quot;,&quot;left&quot;:&quot;260px&quot;}" data-size="{&quot;width&quot;:&quot;auto&quot;,&quot;height&quot;:&quot;auto&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgb(255, 255, 255)&quot;,&quot;font-size&quot;:&quot;15px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;center&quot;,&quot;line-height&quot;:&quot;1.0em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;none&quot;}" data-padding="{&quot;top&quot;:&quot;12px&quot;,&quot;right&quot;:&quot;25px&quot;,&quot;bottom&quot;:&quot;12px&quot;,&quot;left&quot;:&quot;25px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(0, 0, 0, 0)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;0px&quot;,&quot;right-width&quot;:&quot;0px&quot;,&quot;bottom-width&quot;:&quot;0px&quot;,&quot;left-width&quot;:&quot;0px&quot;,&quot;radius&quot;:&quot;0px&quot;}">Suscríbete</div>
                        </div>
                        <div class="mpp-element mpp-element-image mpp-desktop-element-6" title="" data-index="6" data-type="image" data-device="desktop" data-position="{&quot;top&quot;:&quot;17px&quot;,&quot;left&quot;:&quot;298px&quot;}" data-size="{&quot;width&quot;:&quot;43px&quot;,&quot;height&quot;:&quot;43px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(68, 68, 68, 1)&quot;,&quot;font-size&quot;:&quot;15px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.0em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;0px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;0px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/08/NuestraVision_dashboard_logo_small_050819.png"><noscript><img src='https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/08/NuestraVision_dashboard_logo_small_050819.png'></noscript></div>
                        </div>
                        <div class="mpp-element mpp-element-close-icon mpp-desktop-element-7" title="" data-index="7" data-type="close-icon" data-device="desktop" data-position="{&quot;top&quot;:&quot;24px&quot;,&quot;left&quot;:&quot;582px&quot;}" data-size="{&quot;width&quot;:&quot;22px&quot;,&quot;height&quot;:&quot;22px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(255,255,255, 1)&quot;,&quot;font-size&quot;:&quot;28px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.0em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;0px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;0px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}"><i class="mppfic-close-cancel-circular-4"></i></div>
                        </div>
                    </div>
                    <div class="mpp-content-mobile" style="overflow: visible">
                        <div class="mpp-element mpp-element-text-html mpp-mobile-element-0" title="" data-index="0" data-type="text-html" data-device="mobile" data-position="{&quot;top&quot;:&quot;35px&quot;,&quot;left&quot;:&quot;26px&quot;}" data-size="{&quot;width&quot;:&quot;auto&quot;,&quot;height&quot;:&quot;auto&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Arial&quot;,&quot;color&quot;:&quot;rgba(255, 255, 255, 1)&quot;,&quot;font-size&quot;:&quot;58px&quot;,&quot;font-weight&quot;:&quot;700&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;center&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;0px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;0px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}">Suscríbete</div>
                        </div>
                        <div class="mpp-element mpp-element-field_first_name mpp-mobile-element-1 mpp-form-element" title="" data-index="1" data-type="field_first_name" data-device="mobile" data-position="{&quot;top&quot;:&quot;175px&quot;,&quot;left&quot;:&quot;25px&quot;}" data-size="{&quot;width&quot;:&quot;300px&quot;,&quot;height&quot;:&quot;38px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(68, 68, 68, 1)&quot;,&quot;font-size&quot;:&quot;15px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;15px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;15px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;solid&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}"><input type="text" name="first_name" class="mpp-input" value="" placeholder="Nombre" tabindex="2" data-valid-characters="all" data-min-characters="-1"><input type="hidden" name="mpp_field_first_name" value="field_first_name"></div>
                        </div>
                        <div class="mpp-element mpp-element-field_last_name mpp-mobile-element-2 mpp-form-element" title="" data-index="2" data-type="field_last_name" data-device="mobile" data-position="{&quot;top&quot;:&quot;234px&quot;,&quot;left&quot;:&quot;25px&quot;}" data-size="{&quot;width&quot;:&quot;300px&quot;,&quot;height&quot;:&quot;38px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(68, 68, 68, 1)&quot;,&quot;font-size&quot;:&quot;15px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;15px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;15px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;solid&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}"><input type="text" name="last_name" class="mpp-input" value="" placeholder="Apellido" tabindex="3" data-valid-characters="all" data-min-characters="-1"><input type="hidden" name="mpp_field_last_name" value="field_last_name"></div>
                        </div>
                        <div class="mpp-element mpp-element-field_email mpp-mobile-element-3 mpp-form-element" title="" data-index="3" data-type="field_email" data-device="mobile" data-position="{&quot;top&quot;:&quot;297px&quot;,&quot;left&quot;:&quot;25px&quot;}" data-size="{&quot;width&quot;:&quot;300px&quot;,&quot;height&quot;:&quot;38px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="on" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(68, 68, 68, 1)&quot;,&quot;font-size&quot;:&quot;15px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;15px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;15px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;solid&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}"><input type="email" name="email" class="mpp-input" value="" placeholder="Email" tabindex="4" data-valid-characters="all" data-min-characters="-1" required=""><input type="hidden" name="mpp_field_email" value="field_email"></div>
                        </div>
                        <div class="mpp-element mpp-element-image mpp-mobile-element-4" title="" data-index="4" data-type="image" data-device="mobile" data-position="{&quot;top&quot;:&quot;6px&quot;,&quot;left&quot;:&quot;148px&quot;}" data-size="{&quot;width&quot;:&quot;53px&quot;,&quot;height&quot;:&quot;53px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(68, 68, 68, 1)&quot;,&quot;font-size&quot;:&quot;15px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.0em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;0px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;0px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/08/NuestraVision_dashboard_logo_small_050819.png"><noscript><img src='https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/08/NuestraVision_dashboard_logo_small_050819.png'></noscript></div>
                        </div>
                        <div class="mpp-element mpp-element-text-html mpp-mobile-element-5" title="" data-index="5" data-type="text-html" data-device="mobile" data-position="{&quot;top&quot;:&quot;112px&quot;,&quot;left&quot;:&quot;14px&quot;}" data-size="{&quot;width&quot;:&quot;322px&quot;,&quot;height&quot;:&quot;27px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(255,255,255, 1)&quot;,&quot;font-size&quot;:&quot;18px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;center&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;uppercase&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;0px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;0px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}">¡Te mantendremos al día de Nuestra Vision!</div>
                        </div>
                        <div class="mpp-element mpp-element-field_submit mpp-mobile-element-6 mpp-form-element" title="" tabindex="7" data-index="6" data-type="field_submit" data-device="mobile" data-position="{&quot;top&quot;:&quot;353px&quot;,&quot;left&quot;:&quot;114px&quot;}" data-size="{&quot;width&quot;:&quot;auto&quot;,&quot;height&quot;:&quot;auto&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgb(255, 255, 255)&quot;,&quot;font-size&quot;:&quot;15px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;center&quot;,&quot;line-height&quot;:&quot;1.0em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;none&quot;}" data-padding="{&quot;top&quot;:&quot;12px&quot;,&quot;right&quot;:&quot;25px&quot;,&quot;bottom&quot;:&quot;12px&quot;,&quot;left&quot;:&quot;25px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(0, 0, 0, 0)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;0px&quot;,&quot;right-width&quot;:&quot;0px&quot;,&quot;bottom-width&quot;:&quot;0px&quot;,&quot;left-width&quot;:&quot;0px&quot;,&quot;radius&quot;:&quot;0px&quot;}">Suscríbete</div>
                        </div>
                        <div class="mpp-element mpp-element-close-icon mpp-mobile-element-7" title="" data-index="7" data-type="close-icon" data-device="mobile" data-position="{&quot;top&quot;:&quot;13px&quot;,&quot;left&quot;:&quot;300px&quot;}" data-size="{&quot;width&quot;:&quot;22px&quot;,&quot;height&quot;:&quot;22px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(255, 255, 255, 1)&quot;,&quot;font-size&quot;:&quot;22px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.0em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;0px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;0px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}"><i class="mppfic-close-cancel-circular-4"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mpp-overlay-2819" class="mpp-overlay">
            <div class="mpp-overlay-bg"></div>
        </div>
    </div>
    <style>
        .mpp-popup-2819,
        .mpp-inline-2819 {
            margin-top: 0;
            margin-right: 0;
            margin-bottom: 0;
            margin-left: 0
        }

        .mpp-wrap-2819 {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url(https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/NV_Family_02-opt.jpg);
            box-shadow: 0 0 16px 4px rgba(0, 0, 0, .5);
            border-radius: 0
        }

        .mpp-wrap-2819 .mpp-content {
            background-color: rgba(222, 144, 30, .9);
            border-radius: 0
        }

        #mpp-overlay-2819 .mpp-overlay-bg {
            background-color: rgba(0, 1, 5, .8);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            opacity: 1
        }

        #mpp-sticky-2819 .mpp-sticky-control {
            width: auto;
            height: 40px;
            padding-left: 15px;
            padding-right: 15px;
            font-size: 15px;
            color: rgba(255, 255, 255, 1);
            font-family: Roboto;
            background-color: rgba(0, 0, 0, .8);
            background-size: cover;
            background-position: center center;
            background-image: url();
            line-height: 40px
        }

        #mpp-sticky-2819 .mpp-sticky-icon {
            background-color: rgba(32, 95, 240, .8)
        }

        .mpp-wrap-2819 .mpp-preloader.mpp-preloader-animation .mpp-preloader-spinner1 {
            background: rgba(0, 221, 210, 1)
        }

        #mpp-overlay-2819 .mpp-preloader.mpp-preloader-animation .mpp-preloader-spinner1 {
            background: rgba(0, 221, 210, 1)
        }

        .mpp-wrap-2819 .mpp-preloader.mpp-preloader-animation .mpp-preloader-spinner2 {
            background: rgba(62, 153, 255, 1)
        }

        #mpp-overlay-2819 .mpp-preloader.mpp-preloader-animation .mpp-preloader-spinner2 {
            background: rgba(62, 153, 255, 1)
        }

        .mpp-wrap-2819 .mpp-processing-form,
        .mpp-wrap-2819 .mpp-conversion {
            font-size: 14px;
            color: rgba(68, 68, 68, 1);
            font-family: Roboto;
            border-width: 1px;
            border-color: rgba(0, 181, 183, 1);
            border-style: solid;
            background-color: rgba(245, 245, 245, 1);
            background-image: url();
            border-radius: 0
        }

        .mpp-wrap-2819 .mpp-processing-form .mpp-processing-form-footer .mpp-back-to-form {
            font-size: 13px
        }

        .mpp-wrap-2819 .mpp-processing-form .mpp-processing-form-footer .mpp-close-popup {
            font-size: 13px
        }

        .mpp-wrap-2819 .mpp-conversion .mpp-conversion-footer .mpp-back-to-form {
            font-size: 13px
        }

        .mpp-wrap-2819 .mpp-conversion .mpp-conversion-footer .mpp-close-popup {
            font-size: 13px
        }

        .mpp-container-2819 .mpp-form-sent-ok .mpp-processing-form .mpp-processing-form-content {
            color: rgba(68, 68, 68, 1)
        }

        .mpp-wrap-2819 ::-webkit-input-placeholder {
            color: rgba(134, 134, 134, 1) !important
        }

        .mpp-wrap-2819 ::-moz-placeholder {
            color: rgba(134, 134, 134, 1) !important
        }

        .mpp-wrap-2819 :-ms-input-placeholder {
            color: rgba(134, 134, 134, 1) !important
        }

        .mpp-wrap-2819 :-moz-placeholder {
            color: rgba(134, 134, 134, 1) !important
        }

        .mpp-box .mpp-wrap-2819 .mpp-desktop-element-0 {
            z-index: 1;
            visibility: visible;
            width: auto;
            height: auto;
            top: 56px;
            left: 101px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2819 .mpp-desktop-element-0 .mpp-element-content {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Arial;
            font-size: 68px;
            font-weight: 700;
            font-style: normal;
            color: rgba(255, 255, 255, 1);
            text-align: center;
            white-space: normal;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: none !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2819 .mpp-desktop-element-1 {
            z-index: 2;
            visibility: visible;
            width: auto;
            height: auto;
            top: 142px;
            left: 114px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2819 .mpp-desktop-element-1 .mpp-element-content {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 18px;
            font-weight: 400;
            font-style: normal;
            color: rgba(255, 255, 255, 1);
            text-align: center;
            white-space: normal;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: none !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2819 .mpp-desktop-element-2 {
            z-index: 3;
            visibility: visible;
            width: 223px;
            height: 38px;
            top: 180px;
            left: 79px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2819 .mpp-desktop-element-2 .mpp-element-content input {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            color: rgba(68, 68, 68, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 15px;
            padding-bottom: 0;
            padding-left: 15px;
            background-color: rgba(255, 255, 255, 1);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: solid !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2819 .mpp-desktop-element-2 .mpp-element-content input:focus {
            border-color: rgba(0, 255, 21, 1)
        }

        .mpp-box .mpp-wrap-2819 .mpp-desktop-element-3 {
            z-index: 4;
            visibility: visible;
            width: 223px;
            height: 38px;
            top: 180px;
            left: 337px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2819 .mpp-desktop-element-3 .mpp-element-content input {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            color: rgba(68, 68, 68, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 15px;
            padding-bottom: 0;
            padding-left: 15px;
            background-color: rgba(255, 255, 255, 1);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: solid !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2819 .mpp-desktop-element-3 .mpp-element-content input:focus {
            border-color: rgba(0, 255, 21, 1)
        }

        .mpp-box .mpp-wrap-2819 .mpp-desktop-element-4 {
            z-index: 5;
            visibility: visible;
            width: 300px;
            height: 38px;
            top: 237px;
            left: 170px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2819 .mpp-desktop-element-4 .mpp-element-content input {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            color: rgba(68, 68, 68, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 15px;
            padding-bottom: 0;
            padding-left: 15px;
            background-color: rgba(255, 255, 255, 1);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: solid !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2819 .mpp-desktop-element-4 .mpp-element-content input:focus {
            border-color: rgba(0, 255, 21, 1)
        }

        .mpp-box .mpp-wrap-2819 .mpp-desktop-element-5 {
            z-index: 6;
            visibility: visible;
            width: auto;
            height: auto;
            top: 292px;
            left: 260px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2819 .mpp-desktop-element-5 .mpp-element-content {
            line-height: 1em;
            opacity: 1;
            overflow: visible;
            box-shadow: none;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            color: rgb(255, 255, 255);
            text-align: center;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: none;
            padding-top: 12px;
            padding-right: 25px;
            padding-bottom: 12px;
            padding-left: 25px;
            background-color: rgba(5, 180, 137, 1);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(0, 0, 0, 0) !important;
            border-style: none !important;
            border-top-width: 0;
            border-right-width: 0;
            border-bottom-width: 0;
            border-left-width: 0;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2819 .mpp-desktop-element-6 {
            z-index: 7;
            visibility: visible;
            width: 43px;
            height: 43px;
            top: 17px;
            left: 298px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2819 .mpp-desktop-element-6 .mpp-element-content {
            line-height: 1em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            color: rgba(68, 68, 68, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: none !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2819 .mpp-desktop-element-7 {
            z-index: 8;
            visibility: visible;
            width: 22px;
            height: 22px;
            top: 24px;
            left: 582px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2819 .mpp-desktop-element-7 .mpp-element-content {
            line-height: 1em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 28px;
            font-weight: 400;
            font-style: normal;
            color: rgba(255, 255, 255, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: none !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2819 .mpp-mobile-element-0 {
            z-index: 1;
            visibility: visible;
            width: auto;
            height: auto;
            top: 35px;
            left: 26px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2819 .mpp-mobile-element-0 .mpp-element-content {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Arial;
            font-size: 58px;
            font-weight: 700;
            font-style: normal;
            color: rgba(255, 255, 255, 1);
            text-align: center;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: none !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2819 .mpp-mobile-element-1 {
            z-index: 2;
            visibility: visible;
            width: 300px;
            height: 38px;
            top: 175px;
            left: 25px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2819 .mpp-mobile-element-1 .mpp-element-content input {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            color: rgba(68, 68, 68, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 15px;
            padding-bottom: 0;
            padding-left: 15px;
            background-color: rgba(255, 255, 255, 1);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: solid !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2819 .mpp-mobile-element-1 .mpp-element-content input:focus {
            border-color: rgba(0, 255, 21, 1)
        }

        .mpp-box .mpp-wrap-2819 .mpp-mobile-element-2 {
            z-index: 3;
            visibility: visible;
            width: 300px;
            height: 38px;
            top: 234px;
            left: 25px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2819 .mpp-mobile-element-2 .mpp-element-content input {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            color: rgba(68, 68, 68, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 15px;
            padding-bottom: 0;
            padding-left: 15px;
            background-color: rgba(255, 255, 255, 1);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: solid !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2819 .mpp-mobile-element-2 .mpp-element-content input:focus {
            border-color: rgba(0, 255, 21, 1)
        }

        .mpp-box .mpp-wrap-2819 .mpp-mobile-element-3 {
            z-index: 4;
            visibility: visible;
            width: 300px;
            height: 38px;
            top: 297px;
            left: 25px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2819 .mpp-mobile-element-3 .mpp-element-content input {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            color: rgba(68, 68, 68, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 15px;
            padding-bottom: 0;
            padding-left: 15px;
            background-color: rgba(255, 255, 255, 1);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: solid !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2819 .mpp-mobile-element-3 .mpp-element-content input:focus {
            border-color: rgba(0, 255, 21, 1)
        }

        .mpp-box .mpp-wrap-2819 .mpp-mobile-element-4 {
            z-index: 5;
            visibility: visible;
            width: 53px;
            height: 53px;
            top: 6px;
            left: 148px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2819 .mpp-mobile-element-4 .mpp-element-content {
            line-height: 1em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            color: rgba(68, 68, 68, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: none !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2819 .mpp-mobile-element-5 {
            z-index: 6;
            visibility: visible;
            width: 322px;
            height: 27px;
            top: 112px;
            left: 14px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2819 .mpp-mobile-element-5 .mpp-element-content {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 18px;
            font-weight: 400;
            font-style: normal;
            color: rgba(255, 255, 255, 1);
            text-align: center;
            white-space: normal;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: none !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2819 .mpp-mobile-element-6 {
            z-index: 7;
            visibility: visible;
            width: auto;
            height: auto;
            top: 353px;
            left: 114px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2819 .mpp-mobile-element-6 .mpp-element-content {
            line-height: 1em;
            opacity: 1;
            overflow: visible;
            box-shadow: none;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            color: rgb(255, 255, 255);
            text-align: center;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: none;
            padding-top: 12px;
            padding-right: 25px;
            padding-bottom: 12px;
            padding-left: 25px;
            background-color: rgba(5, 180, 137, 1);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(0, 0, 0, 0) !important;
            border-style: none !important;
            border-top-width: 0;
            border-right-width: 0;
            border-bottom-width: 0;
            border-left-width: 0;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2819 .mpp-mobile-element-7 {
            z-index: 8;
            visibility: visible;
            width: 22px;
            height: 22px;
            top: 13px;
            left: 300px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2819 .mpp-mobile-element-7 .mpp-element-content {
            line-height: 1em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 22px;
            font-weight: 400;
            font-style: normal;
            color: rgba(255, 255, 255, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: none !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }
    </style>
    <script>
        //Custom javascript
        (function($) {
            jQuery(document).ready(function($) {

            });
        })(jQuery);
    </script>
    <div class="mpp-container mpp-container-2816 mpp-container-position-middle-center">
        <div class="mpp-box mpp-popup mpp-popup-2816 mpp-position-middle-center " data-popup-id="2816" data-form-type="none">
            <div class="mpp-wrap mpp-wrap-2816">
                <div class="mpp-content">
                    <div class="mpp-content-desktop" style="overflow: visible">
                        <div class="mpp-element mpp-element-text-html mpp-desktop-element-0" title="" data-index="0" data-type="text-html" data-device="desktop" data-position="{&quot;top&quot;:&quot;142px&quot;,&quot;left&quot;:&quot;29px&quot;}" data-size="{&quot;width&quot;:&quot;auto&quot;,&quot;height&quot;:&quot;auto&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Arial&quot;,&quot;color&quot;:&quot;rgba(255, 255, 255, 1)&quot;,&quot;font-size&quot;:&quot;50px&quot;,&quot;font-weight&quot;:&quot;700&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;right&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;0px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;0px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}">¡Gracias por suscribirte!</div>
                        </div>
                        <div class="mpp-element mpp-element-close-icon mpp-desktop-element-1" title="" data-index="1" data-type="close-icon" data-device="desktop" data-position="{&quot;top&quot;:&quot;24px&quot;,&quot;left&quot;:&quot;582px&quot;}" data-size="{&quot;width&quot;:&quot;22px&quot;,&quot;height&quot;:&quot;22px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;close-popup&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(255, 255, 255, 1)&quot;,&quot;font-size&quot;:&quot;28px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.0em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;0px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;0px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}"><i class="mppfic-close-cancel-circular-4"></i></div>
                        </div>
                    </div>
                    <div class="mpp-content-mobile" style="overflow: visible">
                        <div class="mpp-element mpp-element-text-html mpp-mobile-element-0" title="" data-index="0" data-type="text-html" data-device="mobile" data-position="{&quot;top&quot;:&quot;97px&quot;,&quot;left&quot;:&quot;1px&quot;}" data-size="{&quot;width&quot;:&quot;298px&quot;,&quot;height&quot;:&quot;120px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Arial&quot;,&quot;color&quot;:&quot;rgba(255, 255, 255, 1)&quot;,&quot;font-size&quot;:&quot;40px&quot;,&quot;font-weight&quot;:&quot;700&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;center&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;0px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;0px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}">¡Gracias por suscribirte!</div>
                        </div>
                        <div class="mpp-element mpp-element-close-icon mpp-mobile-element-1" title="" data-index="1" data-type="close-icon" data-device="mobile" data-position="{&quot;top&quot;:&quot;13px&quot;,&quot;left&quot;:&quot;255px&quot;}" data-size="{&quot;width&quot;:&quot;22px&quot;,&quot;height&quot;:&quot;22px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;800&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(255, 255, 255, 1)&quot;,&quot;font-size&quot;:&quot;22px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.0em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;0px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;0px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}"><i class="mppfic-close-cancel-circular-4"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mpp-overlay-2816" class="mpp-overlay">
            <div class="mpp-overlay-bg"></div>
        </div>
    </div>
    <style>
        .mpp-popup-2816,
        .mpp-inline-2816 {
            margin-top: 0;
            margin-right: auto;
            margin-bottom: 0;
            margin-left: auto
        }

        .mpp-wrap-2816 {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url(https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2016/08/NV_Family_01.jpg);
            box-shadow: 0 0 16px 4px rgba(0, 0, 0, .5);
            border-radius: 0
        }

        .mpp-wrap-2816 .mpp-content {
            background-color: rgba(233, 100, 170, .9);
            border-radius: 0
        }

        #mpp-overlay-2816 .mpp-overlay-bg {
            background-color: rgba(0, 1, 5, .8);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            opacity: 1
        }

        #mpp-sticky-2816 .mpp-sticky-control {
            width: auto;
            height: 40px;
            padding-left: 15px;
            padding-right: 15px;
            font-size: 15px;
            color: rgba(255, 255, 255, 1);
            font-family: Roboto;
            background-color: rgba(0, 0, 0, .8);
            background-size: cover;
            background-position: center center;
            background-image: url();
            line-height: 40px
        }

        #mpp-sticky-2816 .mpp-sticky-icon {
            background-color: rgba(32, 95, 240, .8)
        }

        .mpp-wrap-2816 .mpp-preloader.mpp-preloader-animation .mpp-preloader-spinner1 {
            background: rgba(0, 221, 210, 1)
        }

        #mpp-overlay-2816 .mpp-preloader.mpp-preloader-animation .mpp-preloader-spinner1 {
            background: rgba(0, 221, 210, 1)
        }

        .mpp-wrap-2816 .mpp-preloader.mpp-preloader-animation .mpp-preloader-spinner2 {
            background: rgba(62, 153, 255, 1)
        }

        #mpp-overlay-2816 .mpp-preloader.mpp-preloader-animation .mpp-preloader-spinner2 {
            background: rgba(62, 153, 255, 1)
        }

        .mpp-wrap-2816 .mpp-processing-form,
        .mpp-wrap-2816 .mpp-conversion {
            font-size: 14px;
            color: rgba(68, 68, 68, 1);
            font-family: Roboto;
            border-width: 1px;
            border-color: rgba(0, 181, 183, 1);
            border-style: solid;
            background-color: rgba(245, 245, 245, 1);
            background-image: url();
            border-radius: 0
        }

        .mpp-wrap-2816 .mpp-processing-form .mpp-processing-form-footer .mpp-back-to-form {
            font-size: 13px
        }

        .mpp-wrap-2816 .mpp-processing-form .mpp-processing-form-footer .mpp-close-popup {
            font-size: 13px
        }

        .mpp-wrap-2816 .mpp-conversion .mpp-conversion-footer .mpp-back-to-form {
            font-size: 13px
        }

        .mpp-wrap-2816 .mpp-conversion .mpp-conversion-footer .mpp-close-popup {
            font-size: 13px
        }

        .mpp-container-2816 .mpp-form-sent-ok .mpp-processing-form .mpp-processing-form-content {
            color: rgba(68, 68, 68, 1)
        }

        .mpp-wrap-2816 ::-webkit-input-placeholder {
            color: rgba(134, 134, 134, 1) !important
        }

        .mpp-wrap-2816 ::-moz-placeholder {
            color: rgba(134, 134, 134, 1) !important
        }

        .mpp-wrap-2816 :-ms-input-placeholder {
            color: rgba(134, 134, 134, 1) !important
        }

        .mpp-wrap-2816 :-moz-placeholder {
            color: rgba(134, 134, 134, 1) !important
        }

        .mpp-box .mpp-wrap-2816 .mpp-desktop-element-0 {
            z-index: 1;
            visibility: visible;
            width: auto;
            height: auto;
            top: 142px;
            left: 29px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2816 .mpp-desktop-element-0 .mpp-element-content {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Arial;
            font-size: 50px;
            font-weight: 700;
            font-style: normal;
            color: rgba(255, 255, 255, 1);
            text-align: right;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: none !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2816 .mpp-desktop-element-1 {
            z-index: 2;
            visibility: visible;
            width: 22px;
            height: 22px;
            top: 24px;
            left: 582px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2816 .mpp-desktop-element-1 .mpp-element-content {
            line-height: 1em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 28px;
            font-weight: 400;
            font-style: normal;
            color: rgba(255, 255, 255, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: none !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2816 .mpp-mobile-element-0 {
            z-index: 1;
            visibility: visible;
            width: 298px;
            height: 120px;
            top: 97px;
            left: 1px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2816 .mpp-mobile-element-0 .mpp-element-content {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Arial;
            font-size: 40px;
            font-weight: 700;
            font-style: normal;
            color: rgba(255, 255, 255, 1);
            text-align: center;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: none !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2816 .mpp-mobile-element-1 {
            z-index: 2;
            visibility: visible;
            width: 22px;
            height: 22px;
            top: 13px;
            left: 255px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2816 .mpp-mobile-element-1 .mpp-element-content {
            line-height: 1em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 22px;
            font-weight: 400;
            font-style: normal;
            color: rgba(255, 255, 255, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: none !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }
    </style>
    <script>
        //Custom javascript
        (function($) {
            jQuery(document).ready(function($) {

            });
        })(jQuery);
    </script>
    <div class="mpp-container mpp-container-2813 mpp-container-position-middle-center">
        <div class="mpp-box mpp-popup mpp-popup-2813 mpp-position-middle-center" data-popup-id="2813" data-form-type="user-subscription" style="opacity: 1; display: none; z-index: 99999999; width: 640px; height: 360px;">
            <div class="mpp-wrap mpp-wrap-2813" style="animation-duration: 700ms;">
                <div class="mpp-content" style="opacity: 1;">
                    <div class="mpp-content-desktop" style="overflow: visible; width: 640px; height: 360px;">
                        <div class="mpp-element mpp-element-text-html mpp-desktop-element-0" title="" data-index="0" data-type="text-html" data-device="desktop" data-position="{&quot;top&quot;:&quot;56px&quot;,&quot;left&quot;:&quot;101px&quot;}" data-size="{&quot;width&quot;:&quot;auto&quot;,&quot;height&quot;:&quot;auto&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}" style="top: 56px; left: 101px; width: auto; height: auto;">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Arial&quot;,&quot;color&quot;:&quot;rgba(255,255,255, 1)&quot;,&quot;font-size&quot;:&quot;68px&quot;,&quot;font-weight&quot;:&quot;700&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;center&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;uppercase&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;0px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;0px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}" style="font-size: 68px !important; padding: 0px !important; border-width: 1px !important; border-radius: 0px !important;">Suscríbete</div>
                        </div>
                        <div class="mpp-element mpp-element-text-html mpp-desktop-element-1" title="" data-index="1" data-type="text-html" data-device="desktop" data-position="{&quot;top&quot;:&quot;142px&quot;,&quot;left&quot;:&quot;114px&quot;}" data-size="{&quot;width&quot;:&quot;auto&quot;,&quot;height&quot;:&quot;auto&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}" style="top: 142px; left: 114px; width: auto; height: auto;">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(255,255,255, 1)&quot;,&quot;font-size&quot;:&quot;18px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;center&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;uppercase&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;0px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;0px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}" style="font-size: 18px !important; padding: 0px !important; border-width: 1px !important; border-radius: 0px !important;">¡Te mantendremos al día de Nuestra Vision!</div>
                        </div>
                        <div class="mpp-element mpp-element-field_first_name mpp-desktop-element-2 mpp-form-element" title="" data-index="2" data-type="field_first_name" data-device="desktop" data-position="{&quot;top&quot;:&quot;180px&quot;,&quot;left&quot;:&quot;79px&quot;}" data-size="{&quot;width&quot;:&quot;223px&quot;,&quot;height&quot;:&quot;38px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="on" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}" style="top: 180px; left: 79px; width: 223px; height: 38px;">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(68, 68, 68, 1)&quot;,&quot;font-size&quot;:&quot;15px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;15px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;15px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;solid&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}"><input type="text" name="first_name" class="mpp-input" value="" placeholder="Nombre" tabindex="3" data-valid-characters="all" data-min-characters="-1" required="" style="font-size: 15px !important; padding: 0px 15px !important; border-width: 1px !important; border-radius: 0px !important;"><input type="hidden" name="mpp_field_first_name" value="field_first_name" style="font-size: 15px !important; padding: 0px 15px !important; border-width: 1px !important; border-radius: 0px !important;"></div>
                        </div>
                        <div class="mpp-element mpp-element-field_last_name mpp-desktop-element-3 mpp-form-element" title="" data-index="3" data-type="field_last_name" data-device="desktop" data-position="{&quot;top&quot;:&quot;180px&quot;,&quot;left&quot;:&quot;337px&quot;}" data-size="{&quot;width&quot;:&quot;223px&quot;,&quot;height&quot;:&quot;38px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="on" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}" style="top: 180px; left: 337px; width: 223px; height: 38px;">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(68, 68, 68, 1)&quot;,&quot;font-size&quot;:&quot;15px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;15px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;15px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;solid&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}"><input type="text" name="last_name" class="mpp-input" value="" placeholder="Apellido" tabindex="4" data-valid-characters="all" data-min-characters="-1" required="" style="font-size: 15px !important; padding: 0px 15px !important; border-width: 1px !important; border-radius: 0px !important;"><input type="hidden" name="mpp_field_last_name" value="field_last_name" style="font-size: 15px !important; padding: 0px 15px !important; border-width: 1px !important; border-radius: 0px !important;"></div>
                        </div>
                        <div class="mpp-element mpp-element-field_email mpp-desktop-element-4 mpp-form-element" title="" data-index="4" data-type="field_email" data-device="desktop" data-position="{&quot;top&quot;:&quot;237px&quot;,&quot;left&quot;:&quot;170px&quot;}" data-size="{&quot;width&quot;:&quot;300px&quot;,&quot;height&quot;:&quot;38px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="on" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}" style="top: 237px; left: 170px; width: 300px; height: 38px;">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(68, 68, 68, 1)&quot;,&quot;font-size&quot;:&quot;15px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;15px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;15px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;solid&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}"><input type="email" name="email" class="mpp-input" value="" placeholder="Email" tabindex="5" data-valid-characters="all" data-min-characters="-1" required="" style="font-size: 15px !important; padding: 0px 15px !important; border-width: 1px !important; border-radius: 0px !important;"><input type="hidden" name="mpp_field_email" value="field_email" style="font-size: 15px !important; padding: 0px 15px !important; border-width: 1px !important; border-radius: 0px !important;"></div>
                        </div>
                        <div class="mpp-element mpp-element-field_submit mpp-desktop-element-5 mpp-form-element" title="" tabindex="6" data-index="5" data-type="field_submit" data-device="desktop" data-position="{&quot;top&quot;:&quot;292px&quot;,&quot;left&quot;:&quot;261px&quot;}" data-size="{&quot;width&quot;:&quot;auto&quot;,&quot;height&quot;:&quot;auto&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}" style="top: 292px; left: 261px; width: auto; height: auto;">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgb(255, 255, 255)&quot;,&quot;font-size&quot;:&quot;15px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;center&quot;,&quot;line-height&quot;:&quot;1.0em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;none&quot;}" data-padding="{&quot;top&quot;:&quot;12px&quot;,&quot;right&quot;:&quot;25px&quot;,&quot;bottom&quot;:&quot;12px&quot;,&quot;left&quot;:&quot;25px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(0, 0, 0, 0)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;0px&quot;,&quot;right-width&quot;:&quot;0px&quot;,&quot;bottom-width&quot;:&quot;0px&quot;,&quot;left-width&quot;:&quot;0px&quot;,&quot;radius&quot;:&quot;0px&quot;}" style="font-size: 15px !important; padding: 12px 25px !important; border-width: 0px !important; border-radius: 0px !important;">Suscríbete</div>
                        </div>
                        <div class="mpp-element mpp-element-image mpp-desktop-element-6" title="" data-index="6" data-type="image" data-device="desktop" data-position="{&quot;top&quot;:&quot;17px&quot;,&quot;left&quot;:&quot;298px&quot;}" data-size="{&quot;width&quot;:&quot;43px&quot;,&quot;height&quot;:&quot;43px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}" style="top: 17px; left: 298px; width: 43px; height: 43px;">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(68, 68, 68, 1)&quot;,&quot;font-size&quot;:&quot;15px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.0em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;0px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;0px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}" style="font-size: 15px !important; padding: 0px !important; border-width: 1px !important; border-radius: 0px !important;"><img src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/08/NuestraVision_dashboard_logo_small_050819.png" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/08/NuestraVision_dashboard_logo_small_050819.png" class="lazyloaded" data-was-processed="true"><noscript><img src='https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/08/NuestraVision_dashboard_logo_small_050819.png'></noscript></div>
                        </div>
                        <div class="mpp-element mpp-element-close-icon mpp-desktop-element-7" title="" data-index="7" data-type="close-icon" data-device="desktop" data-position="{&quot;top&quot;:&quot;24px&quot;,&quot;left&quot;:&quot;582px&quot;}" data-size="{&quot;width&quot;:&quot;22px&quot;,&quot;height&quot;:&quot;22px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}" style="top: 24px; left: 582px; width: 22px; height: 22px;">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(255,255,255, 1)&quot;,&quot;font-size&quot;:&quot;28px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.0em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;0px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;0px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}" style="font-size: 28px !important; padding: 0px !important; border-width: 1px !important; border-radius: 0px !important;"><i class="mppfic-close-cancel-circular-4"></i></div>
                        </div>
                    </div>
                    <div class="mpp-content-mobile" style="overflow: visible; width: 640px; height: 360px;">
                        <div class="mpp-element mpp-element-text-html mpp-mobile-element-0" title="" data-index="0" data-type="text-html" data-device="mobile" data-position="{&quot;top&quot;:&quot;112px&quot;,&quot;left&quot;:&quot;14px&quot;}" data-size="{&quot;width&quot;:&quot;322px&quot;,&quot;height&quot;:&quot;27px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}" style="top: 112px; left: 14px; width: 322px; height: 27px;">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(255, 255, 255, 1)&quot;,&quot;font-size&quot;:&quot;18px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;center&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;uppercase&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;0px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;0px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}" style="font-size: 18px !important; padding: 0px !important; border-width: 1px !important; border-radius: 0px !important;">¡Te mantendremos al día de Nuestra Vision!</div>
                        </div>
                        <div class="mpp-element mpp-element-text-html mpp-mobile-element-1" title="" data-index="1" data-type="text-html" data-device="mobile" data-position="{&quot;top&quot;:&quot;35px&quot;,&quot;left&quot;:&quot;26px&quot;}" data-size="{&quot;width&quot;:&quot;auto&quot;,&quot;height&quot;:&quot;auto&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}" style="top: 35px; left: 26px; width: auto; height: auto;">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Arial&quot;,&quot;color&quot;:&quot;rgba(255, 255, 255, 1)&quot;,&quot;font-size&quot;:&quot;58px&quot;,&quot;font-weight&quot;:&quot;700&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;0px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;0px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}" style="font-size: 58px !important; padding: 0px !important; border-width: 1px !important; border-radius: 0px !important;">Suscríbete</div>
                        </div>
                        <div class="mpp-element mpp-element-field_first_name mpp-mobile-element-2 mpp-form-element" title="" data-index="2" data-type="field_first_name" data-device="mobile" data-position="{&quot;top&quot;:&quot;173px&quot;,&quot;left&quot;:&quot;25px&quot;}" data-size="{&quot;width&quot;:&quot;300px&quot;,&quot;height&quot;:&quot;38px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="on" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}" style="top: 173px; left: 25px; width: 300px; height: 38px;">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(68, 68, 68, 1)&quot;,&quot;font-size&quot;:&quot;15px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;15px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;15px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;solid&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}"><input type="text" name="first_name" class="mpp-input" value="" placeholder="Nombre" tabindex="3" data-valid-characters="all" data-min-characters="-1" required="" style="font-size: 15px !important; padding: 0px 15px !important; border-width: 1px !important; border-radius: 0px !important;"><input type="hidden" name="mpp_field_first_name" value="field_first_name" style="font-size: 15px !important; padding: 0px 15px !important; border-width: 1px !important; border-radius: 0px !important;"></div>
                        </div>
                        <div class="mpp-element mpp-element-field_last_name mpp-mobile-element-3 mpp-form-element" title="" data-index="3" data-type="field_last_name" data-device="mobile" data-position="{&quot;top&quot;:&quot;229px&quot;,&quot;left&quot;:&quot;25px&quot;}" data-size="{&quot;width&quot;:&quot;300px&quot;,&quot;height&quot;:&quot;38px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}" style="top: 229px; left: 25px; width: 300px; height: 38px;">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(68, 68, 68, 1)&quot;,&quot;font-size&quot;:&quot;15px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;15px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;15px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;solid&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}"><input type="text" name="last_name" class="mpp-input" value="" placeholder="Apellido" tabindex="4" data-valid-characters="all" data-min-characters="-1" style="font-size: 15px !important; padding: 0px 15px !important; border-width: 1px !important; border-radius: 0px !important;"><input type="hidden" name="mpp_field_last_name" value="field_last_name" style="font-size: 15px !important; padding: 0px 15px !important; border-width: 1px !important; border-radius: 0px !important;"></div>
                        </div>
                        <div class="mpp-element mpp-element-field_email mpp-mobile-element-4 mpp-form-element" title="" data-index="4" data-type="field_email" data-device="mobile" data-position="{&quot;top&quot;:&quot;284px&quot;,&quot;left&quot;:&quot;25px&quot;}" data-size="{&quot;width&quot;:&quot;300px&quot;,&quot;height&quot;:&quot;38px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="on" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}" style="top: 284px; left: 25px; width: 300px; height: 38px;">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(68, 68, 68, 1)&quot;,&quot;font-size&quot;:&quot;15px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.5em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;15px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;15px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;solid&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}"><input type="email" name="email" class="mpp-input" value="" placeholder="Email" tabindex="5" data-valid-characters="all" data-min-characters="-1" required="" style="font-size: 15px !important; padding: 0px 15px !important; border-width: 1px !important; border-radius: 0px !important;"><input type="hidden" name="mpp_field_email" value="field_email" style="font-size: 15px !important; padding: 0px 15px !important; border-width: 1px !important; border-radius: 0px !important;"></div>
                        </div>
                        <div class="mpp-element mpp-element-field_submit mpp-mobile-element-5 mpp-form-element" title="" tabindex="6" data-index="5" data-type="field_submit" data-device="mobile" data-position="{&quot;top&quot;:&quot;349px&quot;,&quot;left&quot;:&quot;114px&quot;}" data-size="{&quot;width&quot;:&quot;auto&quot;,&quot;height&quot;:&quot;auto&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}" style="top: 349px; left: 114px; width: auto; height: auto;">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgb(255, 255, 255)&quot;,&quot;font-size&quot;:&quot;15px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;center&quot;,&quot;line-height&quot;:&quot;1.0em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;none&quot;}" data-padding="{&quot;top&quot;:&quot;12px&quot;,&quot;right&quot;:&quot;25px&quot;,&quot;bottom&quot;:&quot;12px&quot;,&quot;left&quot;:&quot;25px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(0, 0, 0, 0)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;0px&quot;,&quot;right-width&quot;:&quot;0px&quot;,&quot;bottom-width&quot;:&quot;0px&quot;,&quot;left-width&quot;:&quot;0px&quot;,&quot;radius&quot;:&quot;0px&quot;}" style="font-size: 15px !important; padding: 12px 25px !important; border-width: 0px !important; border-radius: 0px !important;">Suscríbete</div>
                        </div>
                        <div class="mpp-element mpp-element-image mpp-mobile-element-6" title="" data-index="6" data-type="image" data-device="mobile" data-position="{&quot;top&quot;:&quot;6px&quot;,&quot;left&quot;:&quot;148px&quot;}" data-size="{&quot;width&quot;:&quot;53px&quot;,&quot;height&quot;:&quot;53px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}" style="top: 6px; left: 148px; width: 53px; height: 53px;">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(68, 68, 68, 1)&quot;,&quot;font-size&quot;:&quot;15px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.0em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;0px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;0px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}" style="font-size: 15px !important; padding: 0px !important; border-width: 1px !important; border-radius: 0px !important;"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" data-lazy-src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/08/NuestraVision_dashboard_logo_small_050819.png"><noscript><img src='https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/08/NuestraVision_dashboard_logo_small_050819.png'></noscript></div>
                        </div>
                        <div class="mpp-element mpp-element-close-icon mpp-mobile-element-7" title="" data-index="7" data-type="close-icon" data-device="mobile" data-position="{&quot;top&quot;:&quot;13px&quot;,&quot;left&quot;:&quot;300px&quot;}" data-size="{&quot;width&quot;:&quot;22px&quot;,&quot;height&quot;:&quot;22px&quot;,&quot;full-screen&quot;:&quot;off&quot;,&quot;full-width&quot;:&quot;off&quot;}" data-animation="{&quot;enable&quot;:&quot;off&quot;,&quot;effect&quot;:&quot;mpp-fadeIn&quot;,&quot;duration&quot;:&quot;1000&quot;,&quot;delay&quot;:&quot;200&quot;}" data-required="off" data-actions="{&quot;onclick&quot;:{&quot;action&quot;:&quot;default&quot;,&quot;popup_id&quot;:0,&quot;url&quot;:&quot;http:\/\/&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;cookie_name&quot;:&quot;&quot;}}" data-countdown-timer="{&quot;width&quot;:&quot;60px&quot;,&quot;height&quot;:&quot;100px&quot;,&quot;label-font-color&quot;:&quot;rgba(0, 0, 0, 1)&quot;,&quot;label-font-size&quot;:&quot;16px&quot;}" style="top: 13px; left: 300px; width: 22px; height: 22px;">
                            <div class="mpp-element-content" data-font="{&quot;font-family&quot;:&quot;Roboto&quot;,&quot;color&quot;:&quot;rgba(255, 255, 255, 1)&quot;,&quot;font-size&quot;:&quot;22px&quot;,&quot;font-weight&quot;:&quot;400&quot;,&quot;font-style&quot;:&quot;normal&quot;,&quot;text-align&quot;:&quot;left&quot;,&quot;line-height&quot;:&quot;1.0em&quot;,&quot;white-space&quot;:&quot;normal&quot;,&quot;text-transform&quot;:&quot;none&quot;,&quot;text-decoration&quot;:&quot;none&quot;,&quot;letter-spacing&quot;:&quot;normal&quot;,&quot;text-shadow&quot;:&quot;0px 0px 0px rgba(0,0,0,0)&quot;}" data-padding="{&quot;top&quot;:&quot;0px&quot;,&quot;right&quot;:&quot;0px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;0px&quot;}" data-border="{&quot;color&quot;:&quot;rgba(140, 140, 140, 1)&quot;,&quot;style&quot;:&quot;none&quot;,&quot;top-width&quot;:&quot;1px&quot;,&quot;right-width&quot;:&quot;1px&quot;,&quot;bottom-width&quot;:&quot;1px&quot;,&quot;left-width&quot;:&quot;1px&quot;,&quot;radius&quot;:&quot;0px&quot;}" style="font-size: 22px !important; padding: 0px !important; border-width: 1px !important; border-radius: 0px !important;"><i class="mppfic-close-cancel-circular-4"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mpp-overlay-2813" class="mpp-overlay mpp-overlay-close-popup" style="z-index: 99999998; display: none;">
            <div class="mpp-overlay-bg"></div>
            <div class="mpp-preloader mpp-preloader-animation" style="display: none;">
                <div class="mpp-preloader-spinner1"></div>
                <div class="mpp-preloader-spinner2"></div>
            </div>
        </div>
    </div>
    <style>
        .mpp-popup-2813,
        .mpp-inline-2813 {
            margin-top: 0;
            margin-right: 0;
            margin-bottom: 0;
            margin-left: 0
        }

        .mpp-wrap-2813 {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url(https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/uploads/2019/03/NV_Family_02-opt.jpg);
            box-shadow: 0 0 16px 4px rgba(0, 0, 0, .5);
            border-radius: 0
        }

        .mpp-wrap-2813 .mpp-content {
            background-color: rgba(222, 144, 30, .9);
            border-radius: 0
        }

        #mpp-overlay-2813 .mpp-overlay-bg {
            background-color: rgba(0, 1, 5, .8);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            opacity: 1
        }

        #mpp-sticky-2813 .mpp-sticky-control {
            width: auto;
            height: 40px;
            padding-left: 15px;
            padding-right: 15px;
            font-size: 15px;
            color: rgba(255, 255, 255, 1);
            font-family: Roboto;
            background-color: rgba(0, 0, 0, .8);
            background-size: cover;
            background-position: center center;
            background-image: url();
            line-height: 40px
        }

        #mpp-sticky-2813 .mpp-sticky-icon {
            background-color: rgba(32, 95, 240, .8)
        }

        .mpp-wrap-2813 .mpp-preloader.mpp-preloader-animation .mpp-preloader-spinner1 {
            background: rgba(0, 221, 210, 1)
        }

        #mpp-overlay-2813 .mpp-preloader.mpp-preloader-animation .mpp-preloader-spinner1 {
            background: rgba(0, 221, 210, 1)
        }

        .mpp-wrap-2813 .mpp-preloader.mpp-preloader-animation .mpp-preloader-spinner2 {
            background: rgba(62, 153, 255, 1)
        }

        #mpp-overlay-2813 .mpp-preloader.mpp-preloader-animation .mpp-preloader-spinner2 {
            background: rgba(62, 153, 255, 1)
        }

        .mpp-wrap-2813 .mpp-processing-form,
        .mpp-wrap-2813 .mpp-conversion {
            font-size: 14px;
            color: rgba(68, 68, 68, 1);
            font-family: Roboto;
            border-width: 1px;
            border-color: rgba(0, 181, 183, 1);
            border-style: solid;
            background-color: rgba(245, 245, 245, 1);
            background-image: url();
            border-radius: 0
        }

        .mpp-wrap-2813 .mpp-processing-form .mpp-processing-form-footer .mpp-back-to-form {
            font-size: 13px
        }

        .mpp-wrap-2813 .mpp-processing-form .mpp-processing-form-footer .mpp-close-popup {
            font-size: 13px
        }

        .mpp-wrap-2813 .mpp-conversion .mpp-conversion-footer .mpp-back-to-form {
            font-size: 13px
        }

        .mpp-wrap-2813 .mpp-conversion .mpp-conversion-footer .mpp-close-popup {
            font-size: 13px
        }

        .mpp-container-2813 .mpp-form-sent-ok .mpp-processing-form .mpp-processing-form-content {
            color: rgba(68, 68, 68, 1)
        }

        .mpp-wrap-2813 ::-webkit-input-placeholder {
            color: rgba(134, 134, 134, 1) !important
        }

        .mpp-wrap-2813 ::-moz-placeholder {
            color: rgba(134, 134, 134, 1) !important
        }

        .mpp-wrap-2813 :-ms-input-placeholder {
            color: rgba(134, 134, 134, 1) !important
        }

        .mpp-wrap-2813 :-moz-placeholder {
            color: rgba(134, 134, 134, 1) !important
        }

        .mpp-box .mpp-wrap-2813 .mpp-desktop-element-0 {
            z-index: 1;
            visibility: visible;
            width: auto;
            height: auto;
            top: 56px;
            left: 101px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2813 .mpp-desktop-element-0 .mpp-element-content {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Arial;
            font-size: 68px;
            font-weight: 700;
            font-style: normal;
            color: rgba(255, 255, 255, 1);
            text-align: center;
            white-space: normal;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: none !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2813 .mpp-desktop-element-1 {
            z-index: 2;
            visibility: visible;
            width: auto;
            height: auto;
            top: 142px;
            left: 114px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2813 .mpp-desktop-element-1 .mpp-element-content {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 18px;
            font-weight: 400;
            font-style: normal;
            color: rgba(255, 255, 255, 1);
            text-align: center;
            white-space: normal;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: none !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2813 .mpp-desktop-element-2 {
            z-index: 3;
            visibility: visible;
            width: 223px;
            height: 38px;
            top: 180px;
            left: 79px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2813 .mpp-desktop-element-2 .mpp-element-content input {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            color: rgba(68, 68, 68, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 15px;
            padding-bottom: 0;
            padding-left: 15px;
            background-color: rgba(255, 255, 255, 1);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: solid !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2813 .mpp-desktop-element-2 .mpp-element-content input:focus {
            border-color: rgba(0, 255, 21, 1)
        }

        .mpp-box .mpp-wrap-2813 .mpp-desktop-element-3 {
            z-index: 4;
            visibility: visible;
            width: 223px;
            height: 38px;
            top: 180px;
            left: 337px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2813 .mpp-desktop-element-3 .mpp-element-content input {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            color: rgba(68, 68, 68, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 15px;
            padding-bottom: 0;
            padding-left: 15px;
            background-color: rgba(255, 255, 255, 1);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: solid !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2813 .mpp-desktop-element-3 .mpp-element-content input:focus {
            border-color: rgba(0, 255, 21, 1)
        }

        .mpp-box .mpp-wrap-2813 .mpp-desktop-element-4 {
            z-index: 5;
            visibility: visible;
            width: 300px;
            height: 38px;
            top: 237px;
            left: 170px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2813 .mpp-desktop-element-4 .mpp-element-content input {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            color: rgba(68, 68, 68, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 15px;
            padding-bottom: 0;
            padding-left: 15px;
            background-color: rgba(255, 255, 255, 1);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: solid !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2813 .mpp-desktop-element-4 .mpp-element-content input:focus {
            border-color: rgba(0, 255, 21, 1)
        }

        .mpp-box .mpp-wrap-2813 .mpp-desktop-element-5 {
            z-index: 6;
            visibility: visible;
            width: auto;
            height: auto;
            top: 292px;
            left: 261px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2813 .mpp-desktop-element-5 .mpp-element-content {
            line-height: 1em;
            opacity: 1;
            overflow: visible;
            box-shadow: none;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            color: rgb(255, 255, 255);
            text-align: center;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: none;
            padding-top: 12px;
            padding-right: 25px;
            padding-bottom: 12px;
            padding-left: 25px;
            background-color: rgba(5, 180, 137, 1);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(0, 0, 0, 0) !important;
            border-style: none !important;
            border-top-width: 0;
            border-right-width: 0;
            border-bottom-width: 0;
            border-left-width: 0;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2813 .mpp-desktop-element-6 {
            z-index: 7;
            visibility: visible;
            width: 43px;
            height: 43px;
            top: 17px;
            left: 298px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2813 .mpp-desktop-element-6 .mpp-element-content {
            line-height: 1em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            color: rgba(68, 68, 68, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: none !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2813 .mpp-desktop-element-7 {
            z-index: 8;
            visibility: visible;
            width: 22px;
            height: 22px;
            top: 24px;
            left: 582px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2813 .mpp-desktop-element-7 .mpp-element-content {
            line-height: 1em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 28px;
            font-weight: 400;
            font-style: normal;
            color: rgba(255, 255, 255, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: none !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2813 .mpp-mobile-element-0 {
            z-index: 1;
            visibility: visible;
            width: 322px;
            height: 27px;
            top: 112px;
            left: 14px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2813 .mpp-mobile-element-0 .mpp-element-content {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 18px;
            font-weight: 400;
            font-style: normal;
            color: rgba(255, 255, 255, 1);
            text-align: center;
            white-space: normal;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: none !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2813 .mpp-mobile-element-1 {
            z-index: 2;
            visibility: visible;
            width: auto;
            height: auto;
            top: 35px;
            left: 26px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2813 .mpp-mobile-element-1 .mpp-element-content {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Arial;
            font-size: 58px;
            font-weight: 700;
            font-style: normal;
            color: rgba(255, 255, 255, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: none !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2813 .mpp-mobile-element-2 {
            z-index: 3;
            visibility: visible;
            width: 300px;
            height: 38px;
            top: 173px;
            left: 25px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2813 .mpp-mobile-element-2 .mpp-element-content input {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            color: rgba(68, 68, 68, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 15px;
            padding-bottom: 0;
            padding-left: 15px;
            background-color: rgba(255, 255, 255, 1);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: solid !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2813 .mpp-mobile-element-2 .mpp-element-content input:focus {
            border-color: rgba(0, 255, 21, 1)
        }

        .mpp-box .mpp-wrap-2813 .mpp-mobile-element-3 {
            z-index: 4;
            visibility: visible;
            width: 300px;
            height: 38px;
            top: 229px;
            left: 25px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2813 .mpp-mobile-element-3 .mpp-element-content input {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            color: rgba(68, 68, 68, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 15px;
            padding-bottom: 0;
            padding-left: 15px;
            background-color: rgba(255, 255, 255, 1);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: solid !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2813 .mpp-mobile-element-3 .mpp-element-content input:focus {
            border-color: rgba(0, 255, 21, 1)
        }

        .mpp-box .mpp-wrap-2813 .mpp-mobile-element-4 {
            z-index: 5;
            visibility: visible;
            width: 300px;
            height: 38px;
            top: 284px;
            left: 25px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2813 .mpp-mobile-element-4 .mpp-element-content input {
            line-height: 1.5em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            color: rgba(68, 68, 68, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 15px;
            padding-bottom: 0;
            padding-left: 15px;
            background-color: rgba(255, 255, 255, 1);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: solid !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2813 .mpp-mobile-element-4 .mpp-element-content input:focus {
            border-color: rgba(0, 255, 21, 1)
        }

        .mpp-box .mpp-wrap-2813 .mpp-mobile-element-5 {
            z-index: 6;
            visibility: visible;
            width: auto;
            height: auto;
            top: 349px;
            left: 114px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2813 .mpp-mobile-element-5 .mpp-element-content {
            line-height: 1em;
            opacity: 1;
            overflow: visible;
            box-shadow: none;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            color: rgb(255, 255, 255);
            text-align: center;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: none;
            padding-top: 12px;
            padding-right: 25px;
            padding-bottom: 12px;
            padding-left: 25px;
            background-color: rgba(5, 180, 137, 1);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(0, 0, 0, 0) !important;
            border-style: none !important;
            border-top-width: 0;
            border-right-width: 0;
            border-bottom-width: 0;
            border-left-width: 0;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2813 .mpp-mobile-element-6 {
            z-index: 7;
            visibility: visible;
            width: 53px;
            height: 53px;
            top: 6px;
            left: 148px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2813 .mpp-mobile-element-6 .mpp-element-content {
            line-height: 1em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            color: rgba(68, 68, 68, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: none !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }

        .mpp-box .mpp-wrap-2813 .mpp-mobile-element-7 {
            z-index: 8;
            visibility: visible;
            width: 22px;
            height: 22px;
            top: 13px;
            left: 300px;
            cursor: default
        }

        .mpp-box .mpp-wrap-2813 .mpp-mobile-element-7 .mpp-element-content {
            line-height: 1em;
            opacity: 1;
            overflow: visible;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            font-family: Roboto;
            font-size: 22px;
            font-weight: 400;
            font-style: normal;
            color: rgba(255, 255, 255, 1);
            text-align: left;
            white-space: normal;
            text-transform: none;
            text-decoration: none;
            letter-spacing: normal;
            text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-image: url();
            border-color: rgba(140, 140, 140, 1) !important;
            border-style: none !important;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-radius: 0
        }
    </style>
    <script>
        //Custom javascript
        (function($) {
            jQuery(document).ready(function($) {

            });
        })(jQuery);
    </script>
    <link class="mpp-google-fonts" href="//fonts.googleapis.com/css?family=Roboto:400&amp;subset=latin,latin-ext,greek,greek-ext,cyrillic,cyrillic-ext,vietnamese" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="stylesheet" type="text/css">
    <script type="text/javascript" defer="defer" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-includes/js/jquery/ui/core.min.js"></script>
    <script data-minify="1" type="text/javascript" defer="defer" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/cache/min/1/wp-content/uploads/us-assets/nuestravision.tv-ddb3ddf6340b2941879f755f1a9f63bd.js"></script>
    <script>
        window.lazyLoadOptions = {
            elements_selector: "img[data-lazy-src],.rocket-lazyload",
            data_src: "lazy-src",
            data_srcset: "lazy-srcset",
            data_sizes: "lazy-sizes",
            class_loading: "lazyloading",
            class_loaded: "lazyloaded",
            threshold: 300,
            callback_loaded: function(element) {
                if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
                    if (element.classList.contains("lazyloaded")) {
                        if (typeof window.jQuery != "undefined") {
                            if (jQuery.fn.fitVids) {
                                jQuery(element).parent().fitVids()
                            }
                        }
                    }
                }
            }
        };
        window.addEventListener('LazyLoad::Initialized', function(e) {
            var lazyLoadInstance = e.detail.instance;
            if (window.MutationObserver) {
                var observer = new MutationObserver(function(mutations) {
                    var image_count = 0;
                    var iframe_count = 0;
                    var rocketlazy_count = 0;
                    mutations.forEach(function(mutation) {
                        for (i = 0; i < mutation.addedNodes.length; i++) {
                            if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
                                return
                            }
                            if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') {
                                return
                            }
                            images = mutation.addedNodes[i].getElementsByTagName('img');
                            is_image = mutation.addedNodes[i].tagName == "IMG";
                            iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
                            is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
                            rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');
                            image_count += images.length;
                            iframe_count += iframes.length;
                            rocketlazy_count += rocket_lazy.length;
                            if (is_image) {
                                image_count += 1
                            }
                            if (is_iframe) {
                                iframe_count += 1
                            }
                        }
                    });
                    if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
                        lazyLoadInstance.update()
                    }
                });
                var b = document.getElementsByTagName("body")[0];
                var config = {
                    childList: !0,
                    subtree: !0
                };
                observer.observe(b, config)
            }
        }, !1)
    </script>
    <script data-no-minify="1" async="" src="https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/plugins/wp-rocket/assets/js/lazyload/12.0/lazyload.min.js"></script><noscript>
        <link rel='stylesheet' id='master-popups-css' href='https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/plugins/master-popups/assets/public/css/master-popups.min.css' type='text/css' media='all' /></noscript><noscript>
        <link data-minify="1" rel='stylesheet' id='timetable_style-css' href='https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/cache/min/1/wp-content/plugins/timetable/style/style-2bb071db1ada0204cebcb2b71a613e9d.css' type='text/css' media='all' /></noscript><noscript>
        <link data-minify="1" rel='stylesheet' id='timetable_event_template-css' href='https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/cache/min/1/wp-content/plugins/timetable/style/event_template-ccfff7138951055276cab49b81c9da7e.css' type='text/css' media='all' /></noscript><noscript>
        <link data-minify="1" rel='stylesheet' id='us-theme-css' href='https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/cache/min/1/wp-content/uploads/us-assets/nuestravision.tv-4f586b4c505353a67c5b14152d787049.css' type='text/css' media='all' /></noscript><noscript>
        <link data-minify="1" rel='stylesheet' id='bsf-Defaults-css' href='https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/cache/min/1/wp-content/uploads/smile_fonts/Defaults/Defaults-c18edceee1783fbaad1fa95e8fa81222.css' type='text/css' media='all' /></noscript><noscript>
        <link rel='stylesheet' id='ultimate-style-min-css' href='https://3dl0u21nnqk62nshp111jz32-wpengine.netdna-ssl.com/wp-content/plugins/Ultimate_VC_Addons/assets/min-css/ultimate.min.css' type='text/css' media='all' /></noscript><noscript>
        <link class="mpp-google-fonts" href="//fonts.googleapis.com/css?family=Roboto:400&amp;subset=latin,latin-ext,greek,greek-ext,cyrillic,cyrillic-ext,vietnamese" rel="stylesheet" type="text/css"></noscript>
    <!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me -->
    <script type="text/javascript" src="./js/lib/easyXDM.min.js"></script>
    <script>
        var socket = new easyXDM.Socket({
            onReady: function() {
                socket.postMessage(document.body.offsetHeight)
            }
        });
    </script>
</body>

</html>