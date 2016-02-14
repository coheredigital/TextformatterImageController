<?php 


class TextformatterImageControllerConfig extends ModuleConfig {
    public function __construct() {
        $this->add([
            [

                'label' => 'Standard Options',
                'type' => 'fieldset',
                "columnWidth" => 50,
                "children" =>[
                    [
                        'name' => 'use_responsive',
                        'label' => 'Use responsive images',
                        'type' => 'checkbox',
                        'value' => 0
                    ],[
                        'name' => 'lazy_load',
                        'label' => 'Use lazyload images',
                        'type' => 'checkbox',
                        'value' => 0,
                        'notes' => "Assumes the use of 'lazysizes.js' plugin, include with url '{\$config->urls->TextformatterImageMaster}lazysizes.js' \n (Documentation: https://afarkas.github.io/lazysizes/)"
                    ]
                ]
            ],
            [
                'label' => 'Maximum Sizes',
                'type' => 'fieldset',
                "columnWidth" => 50,
                'description' => "Set to 0 for no maximum",
                "children" =>[
                    [
                        'name' => 'max_width',
                        'type' => 'integer',
                        'label' => 'Width',
                        'value' => 1000,
                        "columnWidth" => 50
                    ],
                    [
                        'name' => 'max_height',
                        'type' => 'integer',
                        'label' => 'Height',
                        'value' => 1000,
                        "columnWidth" => 50
                        
                    ]
                ]
            ],
            [
                'label' => 'Classes &amp; Attributes',
                'type' => 'fieldset',
                "columnWidth" => 50,
                "children" =>[
                    [
                        'name' => 'root_class',
                        'type' => 'text',
                        'label' => 'Root class for ImageMaster',
                        'description' => "With a root class of 'image' a portrait image get the class 'image-portrait'.",
                        'notes' => " Root class should help avoid any class conflicts on an existing site. Pick something unique if unsure (example: imgmaster)",
                        'value' => "image"
                    ],
                    [
                        'name' => 'size_class_round',
                        'type' => 'integer',
                        'label' => 'Round size classes to the nearest ___ .',
                        'value' => 50,
                        'notes' => "If and image is 410px X 192px and this field is set to 50, this image/wrapper will get the classes '{rootclass}-width-400' and '{rootclass}-height-200'. Set to 0 for no size classes"
                    ],
                    [
                        'name' => 'use_tagclasses',
                        'type' => 'checkbox',
                        'label' => 'Use tags as classes',
                        'description' => 'Each image tag will be used as a class on image or wrapper',
                        'value' => 0,
                        "notes" => "Prepends 'rootclass' to each tag"
                    ]
                    
                ]
            ],
            [
                'label' => 'Markup Overrides',
                'type' => 'fieldset',
                "columnWidth" => 50,
                "children" =>[
                    [
                        'name' => 'use_wrapper',
                        'type' => 'checkbox',
                        'label' => 'Use an image wrapper',
                        'value' => 0,
                        "columnWidth" => 100,
                        "notes" => "Combines 'rootclass' with '-wrapper' as its class (example 'imgmaster-wrapper'). Classes previously applied to img element will be applied to wrapper.  Uses 'figure' element."
                    ],                   
                    [
                        'name' => 'use_caption',
                        'type' => 'checkbox',
                        'label' => 'Force image caption',
                        'value' => 0,
                        "notes" => "Requires use of image wrapper. Combines 'rootclass' with '-caption' as its class (example 'imgmaster-caption')",
                        "columnWidth" => 100
                    ],
                    [
                        'name' => 'use_link',
                        'type' => 'checkbox',
                        'label' => 'Force link to full size image',
                        'value' => 0,
                        "notes" => "Will recieve default class '{rootclass}-link', see below 'Extra Classes / Extra Attributes' if plugin you are using will need either.",
                        "columnWidth" => 100
                    ],
                    [
                        'name' => 'use_share',
                        'type' => 'checkbox',
                        'label' => 'Use share buttons',
                        'value' => 0,
                        "notes" => "Requires use of image wrapper. Combines 'rootclass' with '-share' as its class",
                        "columnWidth" => 100
                    ],
                    [
                        'name' => 'share_template',
                        'type' => 'text',
                        'label' => 'Share buttons template',
                        "collapsed" => true,
                        'value' => 0,
                        "description" => "If the share buttons option has been enabled and you don't want to use the default markup.",
                        "notes" => "Uses PW TemplateFile Object. Link should be relative to the '/site/templates' directory. The $\image, $\page &amp; $\rootclass variable will be passed in.",
                        "columnWidth" => 100
                    ]
                ]
            ],
            [
                'label' => 'Custom Classes & Attributes',
                'type' => 'fieldset',
                'description' => "Add any extra classes you need applied to each element type. Associated markup override must be enabled above. Classes will NOT have 'rootclass' prepended.",
                "collapsed" => true,
                "children" =>[
                    [
                        'name' => 'img_classes',
                        'type' => 'text',
                        'label' => 'Images Classes',
                        'value' => "",
                        "columnWidth" => 50
                    ],
                    [
                        'name' => 'img_attributes',
                        'type' => 'text',
                        'label' => 'Image Attributes',
                        'value' => "",
                        "columnWidth" => 50
                    ],
                    [
                        'name' => 'wrapper_classes',
                        'type' => 'text',
                        'label' => 'Wrapper Classes',
                        'value' => "",
                        "columnWidth" => 50
                    ],
                    [
                        'name' => 'wrapper_attributes',
                        'type' => 'text',
                        'label' => 'Wrapper Attributes',
                        'value' => "",
                        "columnWidth" => 50
                    ],
                    [
                        'name' => 'link_classes',
                        'type' => 'text',
                        'label' => 'Link Classes',
                        'value' => "",
                        "columnWidth" => 50
                    ],
                    [
                        'name' => 'link_attributes',
                        'type' => 'text',
                        'label' => 'Link Attributes',
                        'value' => "",
                        "columnWidth" => 50
                    ],
                    [
                        'name' => 'caption_classes',
                        'type' => 'text',
                        'label' => 'Caption Classes',
                        'value' => "",
                        "columnWidth" => 50
                    ],
                    [
                        'name' => 'caption_attributes',
                        'type' => 'text',
                        'label' => 'Caption Attributes',
                        'value' => "",
                        "columnWidth" => 50
                    ],
                ]
            ],


        ]);
    }
}