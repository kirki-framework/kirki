<?php
return '
/** Button styles **/
.wp-core-ui .button-primary-disabled,
.wp-core-ui .button-primary.disabled,
.wp-core-ui .button-primary:disabled,
.wp-core-ui .button-primary[disabled] {
  background: COLOR_ACCENT !important;
  color: COLOR_ACCENT_TEXT !important;
  border-color: rgba(0,0,0,.1) !important;
  opacity: .7;
}

.wp-core-ui .button-primary {
  background-color: COLOR_ACCENT;
  color: COLOR_ACCENT_TEXT;
  opacity: 1;
}

/** Tooltip styles **/
#customize-controls .customize-info .customize-tooltip-toggle {
  color: COLOR_ACCENT;
}

/** Image-Radio styles **/
.customize-control-radio-image .image.ui-buttonset label.ui-state-active {
  border: 2px solid COLOR_ACCENT
}

/** Radio-Buttonset styles **/
.customize-control-radio-buttonset label.ui-state-active {
  background-color: COLOR_ACCENT;
  color: COLOR_ACCENT_TEXT;
}

/** Slider Controls **/
.customize-control-slider input[type=range]::-webkit-slider-thumb,
.customize-control-slider input[type=range]::-webkit-slider-thumb,
.customize-control-slider input[type=range]::-moz-range-thumb,
.customize-control-slider input[type=range]::-ms-thumb,
.customize-control-slider .xtkirki_range_value {
  background-color: COLOR_ACCENT !important;
}

/** Switch Controls **/
.customize-control-switch .switch input:checked + label {
  background: COLOR_ACCENT;
  color: COLOR_ACCENT_TEXT
}

/** Toggle Controls **/
.customize-control-toggle input:checked + .switch:after {
  background: COLOR_ACCENT;
}
.customize-control-toggle input:checked + .switch {
  background: COLOR_ACCENT_TEXT;
}

/** Sortable Controls **/
.customize-control-sortable ul.ui-sortable li .dashicons.visibility {
  color: COLOR_ACCENT;
}

/** Palette Controls **/
.customize-control-palette label.ui-state-active.ui-button.ui-widget span.ui-button-text {
  border-color: COLOR_ACCENT;
}
';
