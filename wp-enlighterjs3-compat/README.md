Experimental EnlighterJS3 Integration into Enlighter WordPress Plugin v3
==========================================================================

**NOT SUITIBLE TO BE USED IN PROUCTION**

Targeted to advanced users/professionals only! 

## Use Case ##

Test EnlighterJS v3 with the current Enlighter WordPress Plugin v3

### Limitations ###

* Theme Customizer won't work
* `WordPress Backend -> Enlighter -> Appearance` won't work with the following exceptions: **Theme, Default Language**
* `WordPress Backend -> Enlighter -> Extensions` won't work

## Preparation ##

Before installing/testings this plugin you have to go to the Enlighter settings page (WordPress Admin Area) and set the following options:

`WordPress Backend -> Enlighter -> Options -> Resources and CDN`

* Include Enlighter-CSS : DISABLE
* Include Enlighter-Javascript : DISABLE
* Include External Themes : DISABLE
* MooTools Framework Source: "NOT INCLUDE"
* Enlighter Config: "NOT INCLUDE"

## Installation ##

1. Upload this directory `wp-enlighterjs3-compat` to your WordPress installation into `wp-content/plugins/`
2. Activate the plugin (WordPress admin area `/wp-admin`)