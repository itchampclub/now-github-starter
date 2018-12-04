<?php
require_once('./LineBotTiny.php');
$channelAccessToken = '1B8pMUtZdLgdebgTuRrxV3YirCQv91mbXGnxvlTbX7Cxn471Fs0bBgwGVpedxnPKm7tZUWxnMrT2NqCBCLAG8L7r6vtYoZwb3iqRvYr3BZGrZX/mRNFG8lzNbLr5CHO4PWfTicerD5PVHYjC8mpQ4wdB04t89/1O/w1cDnyilFU=';
$channelSecret = '69b2d81ee6e8ff48d2cacdc8c7d8c337';
date_default_timezone_set('Asia/Jakarta');
$client 		= new LINEBotTiny($channelAccessToken, $channelSecret);
$reply 			= '';
$leave 			= false;
$event 			= $client->parseEvents()[0];
$type 			= $event['type']; 
$source     	= $event['source'];
$userId 		= $source['userId'];
$replyToken 	= $event['replyToken'];
$timestamp		= $event['timestamp'];
$message 		= $event['message'];
$messageid 		= $message['id'];
		$userData = null;
		if($source['type'] == "group") {
			$userData = $client->getProfilFromGroup($userId, $source['groupId']);
		}
		else if($source['type'] == "room") {
			$userData = $client->getProfilFromRoom($userId, $source['roomId']);
		}
		else if($source['type'] == "user") {
			$userData = $client->profil($userId);
		}
if($type == 'memberJoined') 
{
	$replyText = "";
	
	$reply = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => $replyText
										)
								)
							);
}
else if($type == 'follow') 
{
	$replyText = 'สวัสดีครับ มีอะไรให้ช่วยเหลือพิมพ์ "help"';
	
	$reply = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => $replyText
										)
								)
							);
}
else if($type == 'join') 
{
	$replyText = '';
	
	$reply = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => $replyText
										)
								)
							);
}
else if($message['type']=='text')
{
	
        $incomingMsg = strtolower($message['text']);
	if(strpos($incomingMsg,"kick") !== false)
        {
	$replyText = '';
		$reply = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => $replyText
										)
								)
							);
				$leave = true;
        }
	else if(strpos($incomingMsg,"msg") !== false)
        {
	$replyText = '123 ๑๒๓'.chr(10);
	$replyText .= 'ABC กขค @#$'.chr(10);
		$reply = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => $replyText
										)
								)
							);
        }
	
	
	
	
	
	else if(strpos($incomingMsg,"help") !== false)
		{
$reply = array(
'replyToken' => $replyToken,														
'messages' => array(
	
array(
    'type' => 'flex',
    'altText' => 'Flex',
    'contents' => array(
	    
  'type' =>  'bubble',
  'body' => array(
    'type' =>  'box',
    'layout' =>  'vertical',
    'spacing' =>  'md',
    'contents' => array(
      array(
        'type' =>  'text',
        'text' =>  'Help Menu',
        'size' =>  'xl',
        'weight' =>  'bold'
      ),
      array(
        'type' =>  'box',
        'layout' =>  'vertical',
        'spacing' =>  'none',
        'contents' => array(
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'message',
              'label' =>  'ดาวน์โหลดไฟล์รายวิชา',
              'text' =>  'รายชื่อวิชาที่มีไฟล์'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'ดูผลสอบเทอมล่าสุด',
               'uri' =>  'https://linebotba.herokuapp.com/1.php'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'กิจกรรมประจำชุดวิชา',
               'uri' =>  'https://linebotba.herokuapp.com/2.php'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'ปฏิทินการศึกษา',
               'uri' =>  'https://linebotba.herokuapp.com/3.php'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'd4lp STOU',
               'uri' =>  'https://linebotba.herokuapp.com/4.php'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'Moodle STOU',
               'uri' =>  'https://linebotba.herokuapp.com/5.php'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'STOU Regis',
               'uri' =>  'https://regis.stou.ac.th'
            )
            )
        )
      )
    )
  )
	                                                )
							)
							)	
							);
        }	
	
	else if(strpos($incomingMsg,"รายชื่อวิชาที่มีไฟล์") !== false)
		{
$reply = array(
'replyToken' => $replyToken,														
'messages' => array(
	
array(
    'type' => 'flex',
    'altText' => 'Flex',
    'contents' => array(
	    
  'type' =>  'bubble',
  'body' => array(
    'type' =>  'box',
    'layout' =>  'vertical',
    'spacing' =>  'md',
    'contents' => array(
      array(
        'type' =>  'text',
        'text' =>  'Subjects List',
        'size' =>  'xl',
        'weight' =>  'bold'
      ),
      array(
        'type' =>  'box',
        'layout' =>  'vertical',
        'spacing' =>  'none',
        'contents' => array(
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'message',
              'label' =>  '14211 การเรียนรู้ภาษาอังกฤษด้วยตนเอง',
              'text' =>  'dlfile14111'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'message',
              'label' =>  '14213 การเรียนรู้ภาษาอังกฤษด้วยตนเอง',
              'text' =>  'dlfile14113'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'message',
              'label' =>  '14216 การเรียนรู้ภาษาอังกฤษด้วยตนเอง',
              'text' =>  'dlfile14116'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'message',
              'label' =>  '14215 ภาษาศาสตร์เบื้องต้น',
              'text' =>  'dlfile14215'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'message',
              'label' =>  '14318 ทักษะการแปล',
              'text' =>  'dlfile14318'
            )
            )
        )
      )
    )
  )
	                                                )
							)
							)	
							);
        }		
	
	
	else if(strpos($incomingMsg,"dlfile14215") !== false)
		{
$reply = array(
'replyToken' => $replyToken,														
'messages' => array(
	
array(
    'type' => 'flex',
    'altText' => 'Flex',
    'contents' => array(
	    
  'type' =>  'bubble',
  'hero' => array(
    'type' =>  'image',
    'url' =>  'https://itdev.win/14215/14215.jpg',
    'size' =>  'full',
    'aspectRatio' =>  '20:13',
    'aspectMode' =>  'cover'
  ),
	
	    
	    
  'body' => array(
    'type' =>  'box',
    'layout' =>  'vertical',
    'spacing' =>  'md',
    'contents' => array(
      array(
        'type' =>  'text',
        'text' =>  'Linguistics 14215',
        'size' =>  'xl',
        'weight' =>  'bold'
      ),
      array(
        'type' =>  'box',
        'layout' =>  'vertical',
        'spacing' =>  'none',
        'contents' => array(
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่1',
              'uri' =>  'https://itdev.win/14215/1.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่2',
              'uri' =>  'https://itdev.win/14215/2.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่3',
              'uri' =>  'https://itdev.win/14215/3.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่4',
              'uri' =>  'https://itdev.win/14215/4.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่5',
              'uri' =>  'https://itdev.win/14215/5.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่6',
              'uri' =>  'https://itdev.win/14215/6.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่7',
              'uri' =>  'https://itdev.win/14215/7.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่8',
              'uri' =>  'https://itdev.win/14215/8.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่9',
              'uri' =>  'https://itdev.win/14215/9.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่10',
              'uri' =>  'https://itdev.win/14215/10.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่11',
              'uri' =>  'https://itdev.win/14215/11.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่12',
              'uri' =>  'https://itdev.win/14215/12.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่13',
              'uri' =>  'https://itdev.win/14215/13.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่14',
              'uri' =>  'https://itdev.win/14215/14.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่15',
              'uri' =>  'https://itdev.win/14215/15.pdf'
            )
            )
        )
      )
    )
  ),
	                                                )
							)
							)	
							);
	       }
	else if(strpos($incomingMsg,"groupid") !== false)
	{
		if($userData != null) {
			$replyText = "Hi ".$source['groupId'];
			$reply = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => $replyText
									)
							)
						);
		}
	}
}
if($reply != "") {
				
		$client->replyMessage($reply);
	 
	 	if($leave) {
	 		if($source['type'] == "group") {
				$client->leaveGroup($source['groupId']);
			}
			else if($source['type'] == "room") {
				$client->leaveRoom($source['roomId']);
			} 
	 	}	
}
?>
