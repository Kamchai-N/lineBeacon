<?php


$API_URL = 'https://api.line.me/v2/bot/message';
$ACCESS_TOKEN = 'KsBjrGPKnMMKdfV0pO6supx4PZJGqo2cOz1UDOj1mefUIZBf8epuv6J30tzWH0rlraoqekgeUTYhRNQ62V3Xe+2US67PF3QMes/zYaDRULwvvUCy0wXdkZqjyMyG4J1B0ebp9LImCP+ZsZm0R6XugAdB04t89/1O/w1cDnyilFU='; 
$channelSecret = '7320608e94e2d90a1df5cede53f8dd45';


$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);

$request = file_get_contents('php://input');   // Get request content
$request_array = json_decode($request, true);   // Decode JSON to Array



// if ( sizeof($request_array['events']) > 0 ) {

//     foreach ($request_array['events'] as $event) {

//         $reply_message = '';
//         $reply_token = $event['replyToken'];


//         $data = [
//             'replyToken' => $reply_token,
//             'messages' => [['type' => 'text', 'text' => json_encode($request_array)]]
//         ];
//         $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);

//         $send_result = send_reply_message($API_URL.'/reply', $POST_HEADER, $post_body);

//         echo "Result: ".$send_result."\r\n";
        
//     }
// }



$jsonFlex = [
  "type"=> "carousel",
  "altText" => "Hello Flex Message",
  "contents"=> [
      "type"=> "bubble",
      "size"=> "micro",
      "hero"=> [
        "type"=> "image",
        "size"=> "full",
        "aspectMode"=> "cover",
        "aspectRatio"=> "320=>213",
        "url"=> "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/macbook-air-space-gray-select-201810?wid=1200&hei=630&fmt=jpeg&qlt=95&op_usm=0.5,0.5&.v=1603332211000"
      ],
      "body"=> [
        "type"=> "box",
        "layout"=> "vertical",
        "contents"=> [
          [
            "type"=> "text",
            "text"=> "Apple MacBook Air ",
            "weight"=> "bold",
            "size"=> "sm",
            "wrap"=> true
          ],
          [
            "type"=> "box",
            "layout"=> "baseline",
            "contents"=> [
              [
                "type"=> "icon",
                "size"=> "xs",
                "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
              ],
              [
                "type"=> "icon",
                "size"=> "xs",
                "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
              ],
              [
                "type"=> "icon",
                "size"=> "xs",
                "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
              ],
              [
                "type"=> "icon",
                "size"=> "xs",
                "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
              ],
              [
                "type"=> "icon",
                "size"=> "xs",
                "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
              ],
              [
                "type"=> "text",
                "text"=> "4.0",
                "size"=> "xs",
                "color"=> "#8c8c8c",
                "margin"=> "md",
                "flex"=> 0
              ]
            ]
            ],
          [
            "type"=> "box",
            "layout"=> "vertical",
            "contents"=> [
              [
                "type"=> "box",
                "layout"=> "baseline",
                "spacing"=> "sm",
                "contents"=> [
                  [
                    "type"=> "text",
                    "text"=> "฿41,400.00",
                    "wrap"=> true,
                    "color"=> "#8c8c8c",
                    "size"=> "xs",
                    "flex"=> 5
                  ]
                ]
            ]
            ]
          ]
        ],
        "spacing"=> "sm",
        "paddingAll"=> "13px"
      ]
    ],
    [
      "type"=> "bubble",
      "size"=> "micro",
      "hero"=> [
        "type"=> "image",
        "url"=> "https://cf.shopee.co.th/file/2b21f1c39aba591992ddd44e85d395a0",
        "size"=> "full",
        "aspectMode"=> "cover",
        "aspectRatio"=> "320:213"
      ],
      "body"=> [
        "type"=> "box",
        "layout"=> "vertical",
        "contents"=> [
          [
            "type"=> "text",
            "text"=> "Microsoft Surface GO 2",
            "weight"=> "bold",
            "size"=> "sm",
            "wrap"=> true
          ],
          [
            "type"=> "box",
            "layout"=> "baseline",
            "contents"=> [
              [
                "type"=> "icon",
                "size"=> "xs",
                "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
              ],
              [
                "type"=> "icon",
                "size"=> "xs",
                "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
              ],
              [
                "type"=> "icon",
                "size"=> "xs",
                "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
              ],
              [
                "type"=> "icon",
                "size"=> "xs",
                "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
              ],
              [
                "type"=> "icon",
                "size"=> "xs",
                "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
              ],
              [
                "type"=> "text",
                "text"=> "4.0",
                "size"=> "sm",
                "color"=> "#8c8c8c",
                "margin"=> "md",
                "flex"=> 0
              ]
            ]
          ],
          [
            "type"=> "box",
            "layout"=> "vertical",
            "contents"=> [
              [
                "type"=> "box",
                "layout"=> "baseline",
                "spacing"=> "sm",
                "contents"=> [
                  [
                    "type"=> "text",
                    "text"=> "฿24,990",
                    "wrap"=> true,
                    "color"=> "#8c8c8c",
                    "size"=> "xs",
                    "flex"=> 5
                  ]
                ]
              ]
            ]
          ]
        ],
        "spacing"=> "sm",
        "paddingAll"=> "13px"
      ]
    ],
    [
      "type"=> "bubble",
      "size"=> "micro",
      "hero"=> [
        "type"=> "image",
        "url"=> "https://www.lenovo.com/medias/lenovo-laptop-thinkpad-x13-gallery-1.jpg?context=bWFzdGVyfHJvb3R8MzE5Njc5fGltYWdlL2pwZWd8aDhiL2gzMC8xMDgwOTUzNzY5MTY3OC5qcGd8OWMxZDY0Mjk5N2M3NWVjYzFlNjlkYmNkYTU0NjQ1OTQ4ZjJiNmViZWE1ZTJjMGU4YTMyZDE0MzMxYjE4ZTZlYw",
        "size"=> "full",
        "aspectMode"=> "cover",
        "aspectRatio"=> "320:213"
      ],
      "body"=> [
        "type"=> "box",
        "layout"=> "vertical",
        "contents"=> [
          [
            "type"=> "text",
            "text"=> "ThinkPad X13",
            "weight"=> "bold",
            "size"=> "sm"
          ],
          [
            "type"=> "box",
            "layout"=> "baseline",
            "contents"=> [
              [
                "type"=> "icon",
                "size"=> "xs",
                "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
              ],
              [
                "type"=> "icon",
                "size"=> "xs",
                "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
              ],
              [
                "type"=> "icon",
                "size"=> "xs",
                "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
              ],
              [
                "type"=> "icon",
                "size"=> "xs",
                "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
              ],
              [
                "type"=> "icon",
                "size"=> "xs",
                "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
              ],
              [
                "type"=> "text",
                "text"=> "4.0",
                "size"=> "sm",
                "color"=> "#8c8c8c",
                "margin"=> "md",
                "flex"=> 0
              ]
            ]
          ],
          [
            "type"=> "box",
            "layout"=> "vertical",
            "contents"=> [
              [
                "type"=> "box",
                "layout"=> "baseline",
                "spacing"=> "sm",
                "contents"=> [
                  [
                    "type"=> "text",
                    "text"=> "฿36,777",
                    "wrap"=> true,
                    "color"=> "#8c8c8c",
                    "size"=> "xs",
                    "flex"=> 5
                  ]
                ]
              ]
            ]
          ]
        ],
        "spacing"=> "sm",
        "paddingAll"=> "13px"
      ]
  ]
  ];

if ( sizeof($request_array['events']) > 0 ) {
    foreach ($request_array['events'] as $event) {
       
       $reply_message = '';
       $reply_token = $event['replyToken'];
       $text = $event['message']['text'];
       $data = [$jsonFlex];
       $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);
       $send_result = send_reply_message($API_URL.'/reply',      $POST_HEADER, $post_body);
       echo "Result: ".$send_result."\r\n";
     }
 }

echo "OK";




function send_reply_message($url, $post_header, $post_body)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $post_header);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

?>