function tinymce_init_callback(editor)
{
    editor.remove();
    editor = null;

    tinymce.init({
        menubar: false,
        selector: 'textarea.richTextBox',
        skin_url:
            $('meta[name="assets-path"]').attr("content") + "?path=js/skins/voyager",
        min_height: 100,
        height: 200,
        resize: "vertical",
        plugins: "link, image, code, table, textcolor, lists",
        extended_valid_elements:
            "input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]",
        toolbar:
            "styleselect bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link mybutton table | code",
        convert_urls: false,
        image_caption: true,
        image_title: true,
        content_css : "/front/css/app.css",
        setup: function(editor) {
            editor.addButton('mybutton', {
                type: 'button',
                image: "/front/images/button-img.png",
                title: 'Insert link button',
                onclick: function () {
                    editor.windowManager.open({
                        title: 'Insert Link Button',
                        width: 470,
                        height: 220,
                        type:'panel',
                        body: [
                            {
                                type: 'container',
                                label  : 'Text To Display',
                                items: [
                                    {
                                        type: 'textbox',
                                        name: 'text_display',
                                        autofocus: true,
                                        size: 40

                                    },
                                ]
                            }, {
                                type: 'container',
                                label  : 'Url',
                                items: [
                                    {
                                        type: 'textbox',
                                        name: 'url',
                                        size: 40

                                    },
                                ]
                            }, {
                                type: 'container',
                                label  : 'Type',
                                items: [
                                    {
                                        type: 'listbox',
                                        name: 'type',
                                        values: [
                                            {
                                                text: "Default",
                                                value: "btn btn-default"
                                            },
                                            {
                                                text: "Primary",
                                                value: "btn btn-primary"
                                            }, {
                                                text: "Secondary",
                                                value: "btn btn-secondary"
                                            }, {
                                                text: "Success",
                                                value: "btn btn-success"
                                            }, {
                                                text: "Danger",
                                                value: "btn btn-danger"
                                            }, {
                                                text: "Warning",
                                                value: "btn btn-warning"
                                            }, {
                                                text: "Info",
                                                value: "btn btn-info"
                                            }
                                        ],
                                    },
                                ]
                            }, {
                                type: 'container',
                                label: 'Font Size',
                                items: [
                                    {
                                        type: 'listbox',
                                        name: 'font_size',
                                        values: [
                                            {
                                                text: "Default",
                                                value: ""
                                            }, {
                                                text: "36px",
                                                value: "36px"
                                            }, {
                                                text: "30px",
                                                value: "30px"
                                            }, {
                                                text: "24px",
                                                value: "24px"
                                            }, {
                                                text: "18px",
                                                value: "18px"
                                            }, {
                                                text: "14px",
                                                value: "14px"
                                            }, {
                                                text: "12px",
                                                value: "12px"
                                            }
                                        ]
                                    },
                                ]
                            }, {
                                type: 'container',
                                label  : 'Target',
                                items: [
                                    {
                                        type: 'listbox',
                                        name: 'target',
                                        values: [
                                            {
                                                text: "None",
                                                value: ""
                                            }, {
                                                text: "New window",
                                                value: "_blank"
                                            }
                                        ]
                                    },
                                ]
                            }
                        ],
                        onsubmit: function(e) {
                            debugger;
                            const data = e.data;
                            const textDisplay = data.text_display;
                            const url = data.url;
                            const type = data.type;
                            const target = data.target;
                            const fontSize = data.font_size != "" ? 'style="font-size:'+data.font_size+'"' : '';
                            if(textDisplay != "" && url != "") {
                                const button = '<a href="'+url+'" class="'+type+'" target="'+target+'" '+fontSize+'>'+textDisplay+'</a>'
                                editor.insertContent(button);
                            }
                        }
                    });
                },
            });
        }
    })
}
