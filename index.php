<?php
$token = "1272196565:AAFbSVfIjO9IfIIyKuL5-WjFKQyZv7LgzK8";
define('API_KEY',$token); 
$admin = "834522122"; //admin id



   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }

   function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
} 

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$text = $message->text;
$status = $statjson['result']['status'];
$silent = file_get_contents("data/$chat_id/silent.txt");
$re_msgid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$rtid = $update->message->reply_to_message->from->id;
$re_fwdid = $update->message->reply_to_message->forward_from->id;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$rt = $update->message->reply_to_message;
$super_silent = explode("n", $silent);
$re_name = $update->message->reply_to_message->from->first_name;
$mtext = $message->text;
$type = $message->chat->type;
$uid= $message->from->id;
$namegroup = $update->message->chat->title;
$ufname = $update->message->from->first_name;
$uname = $update->message->from->last_name;
$ulogin = $update->message->from->username;
$user_id = $update->message->from->id;
$capt = $message->caption;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$cty = $message->chat->type;
$from_id = $message->from->id;
$step=file_get_contents("data/$fadmin/name.txt");


$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$botim="uzFunksionbot"; //bot useri
$soat = date('H:i', strtotime('2 hour'));
$message = $update->message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$gif = $message->animation;
$doc = $message->document;
$title = $message->chat->title;
$fadmin = $message->from->id;
$lang = $message->from->language_code;
$from = $message->from;
$id = $message->reply_to_message->from->id;
$message_id = $message->reply_to_message->message_id;
$from_user_first_name = $message->reply_to_message->from->first_name;


$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ism = $message->new_chat_member->first_name;
$username = $message->from->username;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$is_bot = $message->new_chat_member->is_bot;

$gif = $message->animation;
$photo = $message->photo;
$sticker = $message->sticker;
$video = $message->video;
$music = $message->audio;
$document = $message->document;
$forward_from = $message->forward_from;
$voice = $message->voice;
$doc = $message->document;
$rasm = $message->photo;
$animation = $message->animation;
$music = $update->message->audio;
$contact = $message->contact;
 $location = $message->location;
$video_note = $message->video_note;
$is_animated = $message->is_animated;
$reply_to_message = $message->reply_to_message;
$game = $message->game;
$kirish = $message->kirish;

$photoset = $message->chat_photo_changed;
$titleset = $message->chat_title_changed;
$descset = $message->chat_description_changed;
$userset = $message->chat_username_changed;
$pinset = $message->pinned_message;

$new = $message->new_chat_member;
$left = $message->left_chat_member;

$kanali="@iDevelopersUz";
$cusername = $message->chat->username;
$chpost = $update->channel_post;
$chuser = $chpost->chat->username;
$chpmesid = $chpost->message_id;
$chcaption = $chpost->caption;

$channel = $update->channel_post; 
$channel_text = $channel->text;
$channel_mid = $channel->message_id; 
$channel_id = $channel->chat->id; 
$channel_title = $channel->chat->title;
$channel_user = $channel->chat->username; 
$chanel_doc = $channel->document; 
$chanel_vid = $channel->video; 
$chanel_mus = $channel->audio; 
$chanel_voi = $channel->voice; 
$chanel_gif = $channel->animation; 
$chanel_fot = $channel->photo; 
$chanel_txt = $channel->text; 
$caption =$channel->caption;

$message_ch = $update->channel_post;
$message_ch_text = $message_ch->text;
$message_ch_photo = $message_ch->photo;


$message_ch_author = $message_ch->author_signature;
$message_ch_mid = $message_ch->message_id;
$message_ch_chid = $message_ch->chat->id;
$message_ch_user = $message_ch->chat->username;
$audio_ch = $message_ch->audio;

$soat = date("H:i", strtotime("2 hour"));
$sana = date('d.m.y',strtotime('2 hour'));

$texxx = $message_ch->caption;

$date = date('d-M Y',strtotime('2 hour'));

$step = file_get_contents("stat/$chat_id.step");
$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");
$kanallar = file_get_contents("stat/kanal.list");
mkdir("warn");
mkdir("stat");
mkdir("sozlama");
mkdir("avto");
mkdir("avto/$cid");
mkdir("matn");
mkdir("kanall");
$avtoinfo = file_get_contents("avto/$cid/avtoinfo.txt");
$avtosoni = file_get_contents("avto/$cid/avtosoni.txt");

$us = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $us->result;
$sana = date('d-M Y',strtotime('2 hour'));
$soat = date('H:i', strtotime('2 hour'));
$login0 = $message->chat->username;
if($login0 == null){
$logincha = "Kiritlmagan!";}else{
$logincha = "@".$login0;	
}

$kun3 = date('N',strtotime('2 hour')); 
$hafta="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7"; 
$ex=explode("$kun3",$hafta); 
$hafta1="$ex[1]"; 
$kun1 = date('z ',strtotime('2 hour')); 
$a = 153;
$c2 = $a-$kun1;
$d = date('L ',strtotime('2 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H ',strtotime('2 hour')); 
$a2 = 23;
$b2 = $a2-$kun2;
$kun3 = date('i ',strtotime('2 hour')); 
$a3 = 59;
$b3 = $a3-$kun3;
$kun4 = date('s ',strtotime('2 hour')); 
$a4 = 60;
$b4 = $a4-$kun4;

if(true){
bot('setChatDescription',[
'chat_id'=>$chat_id,
'description'=>"👋 Guruhimizga xush kelibsiz!
😊Kuningiz xayrli va Barokatli o'tsin!
📆Bugun: $sana-yil
⏰Soat: $soat
📅Hafta kuni: $hafta1
🛡Guruhimiz: $logincha
👥Guruh a'zolari: $count
",
]);
}


if(mb_stripos($text,"King") !== false){
$gname = $message->chat->title;
$cusername = $message->chat->username;
$name = $message->from->first_name;
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Sizga yangi xabar bor.

Guruh haqida:
Guruh nomi: $gname
Guruh useri: @$cusername

Xabarchi haqida:
Ism: <a href='tg://user?id=$uid'>$name</a>
Useri: @$username

Xabar matni: 
<b>$text</b>",
   'parse_mode'=>'html'
  ]);
}
if(mb_stripos($text,"shefpc") !== false){
$gname = $message->chat->title;
$cusername = $message->chat->username;
$name = $message->from->first_name;
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Sizga yangi xabar bor.

Guruh haqida:
Guruh nomi: $gname
Guruh useri: @$cusername

Xabarchi haqida:
Ism: <a href='tg://user?id=$uid'>$name</a>
Useri: @$username

Xabar matni: 
<b>$text</b>",
   'parse_mode'=>'html'
  ]);
}
if(mb_stripos($text,"UzBeK_o7") !== false){
$gname = $message->chat->title;
$cusername = $message->chat->username;
$name = $message->from->first_name;
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Sizga yangi xabar bor.

Guruh haqida:
Guruh nomi: $gname
Guruh useri: @$cusername

Xabarchi haqida:
Ism: <a href='tg://user?id=$uid'>$name</a>
Useri: @$username

Xabar matni: 
<b>$text</b>",
   'parse_mode'=>'html'
  ]);
}

/*SOZLAMA*/
if(isset($text1)){
$get = file_get_contents("sozlama/$chat_id");
if($get){}else{
$baza = [
"salom"=>"true",
"chats"=>"true",
"sticker"=>"true",
"link"=>"true",
"audio"=>"true",
"video"=>"true",
"doc"=>"true",
"rasm"=>"true",
"forward"=>"true",
"gif"=>"true",
"golos"=>"true",
"contact"=>" true",
"user"=>" true",
"hashtag"=>" true",
"location"=>"true",
"video_note"=>"true",
"is_animated"=>"true",
"reply_to_message"=>"true",
"game"=>"true",
"kirish"=>"true",
"komand"=>"true",
];
file_put_contents("sozlama/$chat_id",json_encode($baza));
}
}

$baza = json_decode(file_get_contents("sozlama/$chat_id"),true);
$Ssalom = $baza["salom"];
$Schats = $baza["chats"];
$Ssticker = $baza["sticker"];
$Slink = $baza["link"];
$Saudio = $baza["audio"];
$Svideo = $baza["video"];
$Sdoc = $baza["doc"];
$Sforward_from = $baza["forward_from"];
$Sgif = $baza["gif"];
$Srasm = $baza["rasm"];
$Sgolos = $baza["golos"];
$Scontact = $baza["contact"];
$Suser = $baza["user"];
$Shashtag = $baza["hashtag"];
$Slocation = $baza["location"];
$Svideo_note = $baza["video_note"];
$Sis_animated = $baza["is_animated"];
$Sreply_to_message = $baza["reply_to_message"];
$Sgame = $baza["game"];
$Skirish = $baza["kirish"];
$Skomand = $baza["komand"];


/*salomlashish*/
if(isset($update) and $Ssalom == "true"){

if (($new_chat_members != NUll)&&($is_bot!=true)) {
  if((stripos($lan,"fa")!== false) or (stripos($lan,"ar")!==false)){
  $vaqti = strtotime("+999999999999 minutes");
  bot('kickChatMember', [
  'chat_id' => $chat_id,
  'user_id' => $new_chat_members,
  'until_date'=> $vaqti,
]);
}else{
  $test = "<b>👋 Salom</b> <a href='tg://user?id=$new_chat_members'>$ism</a>, <b>$title</b> guruhimizga xush kelibsiz!";
   bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$test,
   'parse_mode'=>'html'
 ]);
   }
}

}

//     [ / ] NI O'CHIRADI


/*Guruhda gaplashish*/
if(isset($update) and $Schats == "true"){

if((stripos($mtext,"Zo‘r") !== false) or (stripos($mtext,"yaxshi")!==false) or (stripos($mtext,"Zor")!==false) or (stripos($mtext,"Zo'r")!==false)){
  $name = $message->from->first_name;
  $input = array("Qayerdansiz?","Juda  yaxshi 😁","👍","Ok.","Qaysi viloyatdansiz?", "Nima uchun","Har doim shunday bo'lsin.","Qayerliksiz?");
  $rand=rand(0,7);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Toshkent")!==false) or (stripos($mtext,"Andijon")!==false) or (stripos($mtext,"Fargona")!==false) or (stripos($mtext,"Farg'ona")!==false)  or  (stripos($mtext,"Namangan")!==false) or  (stripos($mtext,"Sirdaryo")!==false) or (stripos($mtext,"Jizzax")!==false) or (stripos($mtext,"Qashqadaryo")!==false) or (stripos($mtext,"Surxondaryo")!==false) or (stripos($mtext,"Buxoro")!==false) or (stripos($mtext,"Xorazim")!==false) or (stripos($mtext,"Nukus")!==false) or (stripos($mtext,"Qoraqalpoq")!==false)  or  (stripos($mtext,"Qarshidan")!==false) or  (stripos($mtext,"Guliston")!==false) or (stripos($mtext,"Qoqon")!==false) or (stripos($mtext,"nanay")!==false) or (stripos($mtext,"Nanay")!==false) or (stripos($mtext,"Kattakorgon")!==false) or (stripos($mtext,"Chilonzor")!==false)){
$input = array("Qayeridan?","Zo'rku👍","Hmm,Chiroyli shahar","Yaxshi,lekin biz tomondan ancha uzoq ekan.","O‘zidanmi?", "Yoge,zorku.","Qayeridan.","Hm,u yerda chiroyli joylar ko‘p deb eshitganman.");
  $rand=rand(0,7);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Hm") !== false) or (stripos($mtext,"Xm")!==false)){
  $name = $message->from->first_name;
  $input = array("Nega  hm deysiz gapiring","Hm","Nima Hm?","😂","ZRoBotchadingizmi?","Negadur zRoBotchadim", "Tinchlikmi?","Mbingiz kam qoldimi deyman 😁","Qayerliksiz?");
  $rand=rand(0,8);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Tinchlikmi") !== false)){
  $name = $message->from->first_name;
  $input = array("Ha tinchlik","Nima edi?","O'zizdan so'rasak");
  $rand=rand(0,2);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

 if($text1 == "Hayrli tun" || $text1 == "Spakoyni noc" || $text1 == "Xayrli tun" || $text1 == "Xayrli tun hamaga"){
       bot('sendvoice',[
      'chat_id'=>$chat_id,
      'reply_to_message_id'=>$mesid,
      'voice'=>"http://telegram.me/majnunuz/8"
    ]);
  }

if((stripos($mtext,"Rostdanmi") !== false) or (stripos($mtext,"rostanmi")!==false) or (stripos($mtext,"rostmi")!==false)){
  $name = $message->from->first_name;
  $input = array("Ha rost","Bilmadim","Ha","Men qayerdan bilay ","Yolg'ondan :)");
  $rand=rand(0,4);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"O‘idan") !== false) or (stripos($mtext,"O'zidan")!==false) or (stripos($mtext,"o‘zidan")!==false) or (stripos($mtext,"Sentridan")!==false)){
  $name = $message->from->first_name;
  $input = array("Ha yaxshi","Shahardanmisiz?","Zo'rku");
  $rand=rand(0,2);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Namangan")!==false)){
$input = array("Wow,men ham Namanganlik","Hamshahar ekanmiz!","Men ham Namanganlikman 😊","Qayeridan?","Bitta joydan ekanmiz");
  $rand=rand(0,4);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Yoge")!==false) or (stripos($mtext,"rostanmi")!==false)  or (stripos($mtext,"rostdanmi")!==false)  or (stripos($mtext,"Yog'e")!==false)){
$input = array("Ha","Ha shunaqa","Hm shunday","Haye.","Ha rost");
  $rand=rand(0,4);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

  if((stripos($mtext,"Salom") !== false) or (stripos($mtext,"салом")!==false)){
 if($fadmin==$admin){
    bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>"Assalom-u alaykum, xo'jayin!",
      ]);
  }else{
  $name = $message->from->first_name;
  $input = array("Assalom-u alaykum!","Salom $name, guruhimiz sizga yoqdimi?","Salom, ismingiz nima?","Assaalom-u alaykum","Привет, как дело?","Qaleysiz?","Sizga ham salom","Salom.", "Salom qaleysiz?","Va alaykum assalom, baxtli bo‘ling! 😊.","Yaxshimisiz $name, namuncha ko‘rinmay ketdingiz?", "Juda sersalom ekansiz!", "Assalom-u alaykum!", "Salom $name", "Iye keling,endi sizni eslab turgandik","Ana, yana bittasi keldi 😂","Salom meni tanidizmi?","Salom bergan kishini...Xudo o‘nglar ishini.","Namuncha salom berurasiz","Salomim so‘lim-so‘lim  kitobdadur o‘ng  qo‘lim. Tringlab hech qoymagan Telegramda chap qo‘lim!","Sizni ko‘radigan kun ham bor ekanu!","Salom, yaxshimisiz?","Qaleysiz?","Asssalom-u alaykum boy ota. Ishlar qaley?","Sava","Привет ","Hello $name, qaleysiz?","Salom, Nick daxshat-ku a?","Ehe keb qoling, anu gap nima bo'ldi?","Yuragizni sevgi muhabbat qoplagan vaqtda to‘g‘ri shu yerga kelevering, ok?","Garov  o‘ynaymizmi  kimnidur sevib qolgansiz?Agar adashayotgan bo‘lsam, garov haqida unuting 😆","Bolla, qizla bitta fikr bor!","Keling, sizni ham ko‘radigan  kun  bor ekan-ku a?");
  $rand=rand(0,32);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}
  }

  if($text1 == "Ok" or  $text1 == "ok" or $text1 == "OK" or $text1 == "oK"){
  $input = array("Ok!!!","Nok🍐","Sok","👌","Tok?","😏","?","👍","Ok");
  $rand=rand(0,8);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if(stripos($mtext,"Kimni") !== false){
  $input  = array("Bilmasam?","Natashani jiyani","Bugun havo zo‘r-ku a?","Men bilmayman");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$soz,
   ]));
}

if(stripos($mtext,"Qanaqa") !== false){
  $input  = array("Man qayerdan bilay?","Hech qanaqa 😆","Shunaqa","Bilmasam");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$soz,
   ]));
}

if((stripos($mtext,"Qaleys") !== false) or (stripos($mtext,"Qalaysan")!==false)  or (stripos($mtext,"Qaliysan")!==false) or (stripos($mtext,"Qaneysan")!==false)  or  (stripos($mtext,"Qanneysan")!==false)){
  $input = array("Cho‘tki 😁","Zo‘r.", "Zo‘r, o‘zingizchi?","Kechagidan  yaxshi 😁","Yaxshi, so‘raganingiz uchun rahmat!", "Zo‘r", "Zo‘r, o‘zingizchi?", "Chidasa bo‘ladi 👌");
  $rand=rand(0,7);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"RoBot") !== false) or (stripos($mtext,"Bot") !== false) or (stripos($mtext,"Botcha") !== false) or (stripos($mtext,"RoBotcha")!==false)){
  $input = array("Qaleysiz?","Har zamonda bir yozib turingda siz ham","Uydagilar uylan deb qoymayapti","Profilingizdagi rasm zo‘r 👍","Bugun hamma jim negadir?","Shu ismimni deb hamma meni rus deb o'ylaydi😜","Admin ko'rinmaydimi?","Mbingiz kam qolibdi 😂", "Men shu yerdaman.", "Ho‘v?", "Shunaqa chaqirishingiz juda ham yoqadi-da ☺️", "Nima?", "Menda ishingiz bormi?", "Hozir kimdir meni esladimi?","Tinchgina ovqatlanishga ham qoyishmaydi-de bular","Qulog‘im  sizda!","Labbay?!","Eshitaman?","Hozir kelaman mb kam qolibdi","Salom, biror nima kerakmi?","Shu ismni qayerdadir eshitganman-da 🤔","Ana kapitan");
  $rand=rand(0,14);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if((stripos($mtext,"Rahmat")!==false) or (stripos($mtext,"Raxmat")!== false)){
  $input = array("Arzimaydi 😊","Arziysiz","😊","Rahmatga hojat yo‘q!");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if(stripos($mtext,"Kimman") !== false){
  $name = $message->from->first_name;
  $input = array("$name bo‘lsangiz kerak yana bilmadim.","O‘zingiz  bilmasangiz, men qayerdan bilaman?!","Betakrorsiz","Ajinagul...degan sinfdoshim esimga tushib ketdi 😢","N1","Kapitan","Ponchik","Kunfu panda","Kim san, Shu serialni kim  ko‘rgan?","Kim bo‘lsangiz  ham avvalo inson bo’ling!","Brucleeni quritilgani 😂","Boyvacha","Eng zo‘risiz","Men qayerdan bilay");
  $rand=rand(0,13);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if(stripos($mtext,"Kimsan")!== false){
  $name = $message->from->first_name;
  $input = array("N1","Shu savolni eshitsam negadir nickimga hech nima yozilmagan ekan degan hayolga boraman!?","Hazillash robotcha!","Kim deb o‘ylaysiz?","Traktorchi Abdusattorni qo‘shinisi Sobirni amakivachchasiga boja bo‘lgan G‘anisher degan aka bor-ku, o‘sha mashinasiga tonirofka qildiribdi 😜","Kapitan Telegram","Mashaman","Sirliman 🎩","O‘ziz kimsiz?","Har doim shu savolni beraverib charchamadingizmi?","Tinchlikmi kimligim bilan qiziqib qolibsiz?!","Menmi?","Nima edi 😡...Vux qo‘rqib ketdingiz-a?","Leonardo Dekapryo,","Mishani xizmatdosh jo'rasi!");
  $rand=rand(0,13);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if(mb_stripos($text,"golos") !== false){ 
$input = array("qanaqa golos","Bemalol Golos Kerakmi","Tanishmaymizmi","Ismim RoBotcha siznikichi","ismiz nima");
  $rand=rand(0,4);
  $soz="$input[$rand]";
$vo = file_get_contents('http://tts.baidu.com/text2audio?lan=uzb&ie=UTF-8&text='.urlencode($soz));
file_put_contents('vo.ogg',$vo);
bot('SendVoice',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'voice'=>new CURLFile('vo.ogg'),
]);
}

if(mb_stripos($text,"ovoz") !== false){ 
$input = array("qanaqa golos","Bemalol Golos Kerakmi","Tanishmaymizmi","Ismim RoBotcha siznikichi","ismiz nima");
  $rand=rand(0,4);
  $soz="$input[$rand]";
$vo = file_get_contents('http://tts.baidu.com/text2audio?lan=uzb&ie=UTF-8&text='.urlencode($soz));
file_put_contents('vo.ogg',$vo);
bot('SendVoice',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'voice'=>new CURLFile('vo.ogg'),
]);
}

if(mb_stripos($text,"xursandman") !== false){ 
$input = array("menam juda xursandman","albatta xursand boling","juda yaxshi","menam","shunaqa deng");
  $rand=rand(0,4);
  $soz="$input[$rand]";
$vo = file_get_contents('http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&text='.urlencode($soz));
file_put_contents('vo.ogg',$vo);
bot('SendVoice',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'voice'=>new CURLFile('vo.ogg'),
]);
}

}

# Ushbu Kod @UzBeK_o7 Tomonidn @iDevelopersUz kanalida Tarqatildi #
# Mangaga Tegsangiz Xafa Bo'lish Yo'q, ITARAMAN!!! #
# Ushbu Kod @uzFunksionbot ning eng yanggi versiyasi hisoblanadi #

/*sozlama menyusi*/
if($text1 == "/sozlama" or $text == "/sozlama@uzFunksionbot"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$baza = json_decode(file_get_contents("sozlama/$chat_id"),true);
$salom = $baza["salom"];
if($salom == "false"){
$salom = "☑Taqiqlangan";
}else{
$salom = "✅Ruhsat etilgan";
}
$chats = $baza["chats"];
if($chats == "false"){
$chats = "☑Taqiqlangan";
}else{
$chats = "✅Ruhsat etilgan";
}
$sticker = $baza["sticker"];
if($sticker == "false"){
$sticker = "☑Taqiqlangan";
}else{
$sticker = "✅Ruhsat etilgan";
}
$link = $baza["link"];
if($link == "false"){
$link = "☑Taqiqlangan";
}else{
$link = "✅Ruhsat etilgan";
}
$audio = $baza["audio"];
if($audio == "false"){
$audio = "☑Taqiqlangan";
}else{
$audio = "✅Ruhsat etilgan";
}
$video = $baza["video"];
if($video == "false"){
$video  = "☑Taqiqlangan";
}else{
$video = "✅Ruhsat etilgan";
}
$doc = $baza["doc"];
if($doc == "false"){
$doc = "☑Taqiqlangan";
}else{
$doc = "✅Ruhsat etilgan";
}
$forward_from = $baza["forward_from"];
if($forward_from == "false"){
$forward_from  = "☑Taqiqlangan";
}else{
$forward_from = "✅Ruhsat etilgan";
}
$gif = $baza["gif"];
if($gif == "false"){
$gif  = "☑Taqiqlangan";
}else{
$gif = "✅Ruhsat etilgan";
}
$rasm = $baza["rasm"];
if($rasm == "false"){
$rasm  = "☑Taqiqlangan";
}else{
$rasm = "✅Ruhsat etilgan";
}
$golos = $baza["golos"];
if($golos == "false"){
$golos  = "☑Taqiqlangan";
}else{
$golos = "✅Ruhsat etilgan";
}
$contact = $baza["contact"];
if($contact == "false"){
$contact = "☑Taqiqlangan";
}else{
$contact = "✅Ruhsat etilgan";
}
$user = $baza["user"];
if($user == "false"){
$user = "☑Taqiqlangan";
}else{
$user = "✅Ruhsat etilgan";
}
$hashtag = $baza["hashtag"];
if($hashtag == "false"){
$hashtag = "☑Taqiqlangan";
}else{
$hashtag = "✅Ruhsat etilgan";
}
 $location = $baza["location"];
if($location == "false"){
$location = "☑Taqiqlangan";
}else{
$location = "✅Ruhsat etilgan";
}
$video_note = $baza["video_note"];
if($video_note == "false"){
$video_note  = "☑Taqiqlangan";
}else{
$video_note = "✅Ruhsat etilgan";
}
$is_animated = $baza["is_animated"];
if($is_animated == "false"){
$is_animated = "☑Taqiqlangan";
}else{
$is_animated = "✅Ruhsat etilgan";
}
$reply_to_message = $baza["reply_to_message"];
if($reply_to_message == "false"){
$reply_to_message = "☑Taqiqlangan";
}else{
$reply_to_message = "✅Ruhsat etilgan";
}
$game = $baza["game"];
if($game == "false"){
$game = "☑Taqiqlangan";
}else{
$game = "✅Ruhsat etilgan";
}
$kirish = $baza["kirish"];
if($kirish == "false"){
$kirish = "☑Taqiqlangan";
}else{
$kirish = "✅Ruhsat etilgan";
}
$komand = $baza["komand"];
if($komand == "false"){
$komand = "☑Taqiqlangan";
}else{
$komand = "✅Ruhsat etilgan";
}
file_put_contents("sozlama/$fadmin.lch","$chat_id");
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"<b>Lichkangizga yubordim!</b>",
'parse_mode'=>'html',
]);

sleep('1');
bot('DeleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
bot('sendMessage', [
'chat_id'=>$fadmin,
'text'=>"$title<b>Guruh sozlamalari!</b>nn<b>✅Ruhsat etilgan fayllar</b>n<b>☑Taqiqlangan fayllar</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["callback_data"=>"salom","text"=>"👋 Salomlashish"],["callback_data"=>"M()salom","text"=>"$salom"],],
[["callback_data"=>"chats","text"=>"✏ Guruhda Suhbatlashish"],["callback_data"=>"M()chats","text"=>"$chats"],],
[["callback_data"=>"rasm","text"=>"📷Rasm"],["callback_data"=>"M()rasm","text"=>"$rasm"],],
[["callback_data"=>"link","text"=>"📡Link"],["callback_data"=>"M()link","text"=>"$link"],],
[["callback_data"=>"sticker","text"=>"🎭Sticker"],["callback_data"=>"M()sticker","text"=>"$sticker"],],
[["callback_data"=>"doc","text"=>"📁Fayl"],["callback_data"=>"M()doc","text"=>"$doc"],],
[["callback_data"=>"video","text"=>"🎬 Video"],["callback_data"=>"M()video","text"=>"$video"],],
[["callback_data"=>"audio","text"=>"🎶 Musiqa"],["callback_data"=>"M()audio","text"=>"$audio"],],
[["callback_data"=>"forward_from","text"=>"➡ Forward"],["callback_data"=>"M()forward_from","text"=>"$forward_from"],],
[["callback_data"=>"gif","text"=>"💾Gif"],["callback_data"=>"M()gif","text"=>"$gif"],],
[["callback_data"=>"golos","text"=>"🎤Golos"],["callback_data"=>"M()golos","text"=>"$golos"],],
[["callback_data"=>"contact","text"=>"👤Kontakt"],["callback_data"=>"M()contact","text"=>"$contact"],],
[["callback_data"=>"user","text"=>"📧Userlar"],["callback_data"=>"M()user","text"=>"$user"],],
[["callback_data"=>"hashtag","text"=>"#⃣HashTag"],["callback_data"=>"M()hashtag","text"=>"$hashtag"],],
[["callback_data"=>"location","text"=>"🏠Manzil"],["callback_data"=>"M()location","text"=>"$location"],],
[["callback_data"=>"video_note","text"=>"📹Yumoloq video"],["callback_data"=>"M()video_note","text"=>"$video_note"],],
[["callback_data"=>"is_animated","text"=>"🎭Animation sticker"],["callback_data"=>"M()is_animated","text"=>"$is_animated"],],
[["callback_data"=>"reply_to_message","text"=>"↩Reply"],["callback_data"=>"M()reply_to_message","text"=>"$reply_to_message"],],
[["callback_data"=>"game","text"=>"🖲Game"],["callback_data"=>"M()game","text"=>"$game"],],
[["callback_data"=>"kirish","text"=>"🗑Kirdi chiqdilarni tozalash"],["callback_data"=>"M()kirish","text"=>"$kirish"],],
[["callback_data"=>"komand","text"=>"🚸 Buyruqlarni O'chirish 🚸"],["callback_data"=>"M()komand","text"=>"$komand"],],
]
]),
]);
}
}

$callback = $update->callback_query;
$dataa = $callback->data;
$dataa = explode("()",$dataa);
if($dataa[0] == "M"){
$cid = $callback->from->id;
$mid = $callback->message->message_id;
$imid = $callback->inline_message_id;
$idd = file_get_contents("sozlama/$cid.lch");
$gets = bot("getChat",[
"chat_id"=>"$idd",
]);
$title = $gets->result->title;
$baza = json_decode(file_get_contents("sozlama/$idd"),true);
if($baza["$dataa[1]"] == "true"){
$input = "false";
}else{
$input = "true";
}
$baza["$dataa[1]"] = $input;
file_put_contents("sozlama/$idd",json_encode($baza));
$baza = json_decode(file_get_contents("sozlama/$idd"),true);
$salom = $baza["salom"];
if($salom == "false"){
$salom = "☑Taqiqlangan️";
}else{
$salom = "✅Ruhsat etilgan";
}
$chats = $baza["chats"];
if($chats == "false"){
$chats = "☑Taqiqlangan️";
}else{
$chats = "✅Ruhsat etilgan";
}
$sticker = $baza["sticker"];
if($sticker == "false"){
$sticker = "☑Taqiqlangan";
}else{
$sticker = "✅Ruhsat etilgan";
}
$link = $baza["link"];
if($link == "false"){
$link = "☑Taqiqlangan";
}else{
$link = "✅Ruhsat etilgan";
}
$audio = $baza["audio"];
if($audio == "false"){
$audio = "☑Taqiqlangan";
}else{
$audio = "✅Ruhsat etilgan";
}
$video = $baza["video"];
if($video == "false"){
$video  = "☑Taqiqlangan";
}else{
$video = "✅Ruhsat etilgan";
}
$doc = $baza["doc"];
if($doc == "false"){
$doc  = "☑Taqiqlangan";
}else{
$doc = "✅Ruhsat etilgan";
}
$forward_from = $baza["forward_from"];
if($forward_from == "false"){
$forward_from  = "☑Taqiqlangan";
}else{
$forward_from = "✅Ruhsat etilgan";
}
$gif = $baza["gif"];
if($gif == "false"){
$gif  = "☑Taqiqlangan";
}else{
$gif = "✅Ruhsat etilgan";
}
$rasm = $baza["rasm"];
if($rasm == "false"){
$rasm  = "☑Taqiqlangan";
}else{
$rasm = "✅Ruhsat etilgan";
}
$golos = $baza["golos"];
if($golos == "false"){
$golos  = "☑Taqiqlangan";
}else{
$golos = "✅Ruhsat etilgan";
}
$contact = $baza["contact"];
if($contact == "false"){
$contact = "☑Taqiqlangan";
}else{
$contact = "✅Ruhsat etilgan";
}
$user = $baza["user"];
if($user == "false"){
$user = "☑Taqiqlangan";
}else{
$user = "✅Ruhsat etilgan";
}
$hashtag = $baza["hashtag"];
if($hashtag == "false"){
$hashtag = "☑Taqiqlangan";
}else{
$hashtag = "✅Ruhsat etilgan";
}
 $location = $baza["location"];
if($location == "false"){
$location = "☑Taqiqlangan";
}else{
$location = "✅Ruhsat etilgan";
}
$video_note = $baza["video_note"];
if($video_note == "false"){
$video_note  = "☑Taqiqlangan";
}else{
$video_note = "✅Ruhsat etilgan";
}
$is_animated = $baza["is_animated"];
if($is_animated == "false"){
$is_animated = "☑Taqiqlangan";
}else{
$is_animated = "✅Ruhsat etilgan";
}
$reply_to_message = $baza["reply_to_message"];
if($reply_to_message == "false"){
$reply_to_message = "☑Taqiqlangan";
}else{
$reply_to_message = "✅Ruhsat etilgan";
}
$game = $baza["game"];
if($game == "false"){
$game = "☑Taqiqlangan";
}else{
$game = "✅Ruhsat etilgan";
}
$kirish = $baza["kirish"];
if($kirish == "false"){
$kirish = "☑Taqiqlangan";
}else{
$kirish = "✅Ruhsat etilgan";
}
$komand = $baza["komand"];
if($komand == "false"){
$komand = "☑Taqiqlangan";
}else{
$komand = "✅Ruhsat etilgan";
}
bot('editMessageText', [
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"$title<b>Guruh sozlamalari!</b>nn<b>✅Ruhsat etilgan fayllar</b>n<b>☑Taqiqlangan fayllar</b>",
'parse_mode'=>'html',
'inline_message_id'=>$imid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["callback_data"=>"salom","text"=>"👋 Salomlashish"],["callback_data"=>"M()salom","text"=>"$salom"],],
[["callback_data"=>"chats","text"=>"✏ Guruhda Suhbatlashish"],["callback_data"=>"M()chats","text"=>"$chats"],],
[["callback_data"=>"rasm","text"=>"📷Rasm"],["callback_data"=>"M()rasm","text"=>"$rasm"],],
[["callback_data"=>"link","text"=>"📡Link"],["callback_data"=>"M()link","text"=>"$link"],],
[["callback_data"=>"sticker","text"=>"🎭Sticker"],["callback_data"=>"M()sticker","text"=>"$sticker"],],
[["callback_data"=>"doc","text"=>"📁Fayl"],["callback_data"=>"M()doc","text"=>"$doc"],],
[["callback_data"=>"video","text"=>"🎬 Video"],["callback_data"=>"M()video","text"=>"$video"],],
[["callback_data"=>"audio","text"=>"🎶 Musiqa"],["callback_data"=>"M()audio","text"=>"$audio"],],
[["callback_data"=>"forward_from","text"=>"➡ Forward"],["callback_data"=>"M()forward_from","text"=>"$forward_from"],],
[["callback_data"=>"gif","text"=>"💾Gif"],["callback_data"=>"M()gif","text"=>"$gif"],],
[["callback_data"=>"golos","text"=>"🎤Golos"],["callback_data"=>"M()golos","text"=>"$golos"],],
[["callback_data"=>"contact","text"=>"👤Kontakt"],["callback_data"=>"M()contact","text"=>"$contact"],],
[["callback_data"=>"user","text"=>"📧Userlar"],["callback_data"=>"M()user","text"=>"$user"],],
[["callback_data"=>"hashtag","text"=>"#⃣HashTag"],["callback_data"=>"M()hashtag","text"=>"$hashtag"],],
[["callback_data"=>"location","text"=>"🏠Manzil"],["callback_data"=>"M()location","text"=>"$location"],],
[["callback_data"=>"video_note","text"=>"📹Yumoloq video"],["callback_data"=>"M()video_note","text"=>"$video_note"],],
[["callback_data"=>"is_animated","text"=>"🎭Animation sticker"],["callback_data"=>"M()is_animated","text"=>"$is_animated"],],
[["callback_data"=>"reply_to_message","text"=>"↩Reply"],["callback_data"=>"M()reply_to_message","text"=>"$reply_to_message"],],
[["callback_data"=>"game","text"=>"🖲Game"],["callback_data"=>"M()game","text"=>"$game"],],
[["callback_data"=>"kirish","text"=>"🗑Kirdi chiqdilarni tozalash"],["callback_data"=>"M()kirish","text"=>"$kirish"],],
[["callback_data"=>"komand","text"=>"🚸 Buyruqlarni O'chirish 🚸"],["callback_data"=>"M()komand","text"=>"$komand"],],
]
]),
]);
}
///////////////////
 if(isset($update) and $Sgif == "false"){
if(isset($message->animation)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Scontact == "false"){
if(isset($message->contact)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Srasm == "false"){
if(isset($message->photo)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Ssticker == "false"){
if(isset($message->sticker)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Svideo == "false"){
if(isset($message->video)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Saudio == "false"){
if(isset($message->audio)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Sdoc == "false"){
if(isset($message->document)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Sforward_from == "false"){
if(isset($message->forward_from) or isset($message->forward_from_chat)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Sgolos == "false"){
if(isset($message->voice)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}


if(isset($update) and $Slink == "false"){
if((mb_stripos($mtext,"http") !==false) or (stripos($capt,"http://")!==false) or (stripos($capt,"bot?start=")!==false) or (stripos($mtext,"bot?start=")!==false) or (stripos($mtext,"https://")!==false)){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Suser == "false"){
if((mb_stripos($mtext,"@") !==false) or (stripos($capt,"@")!==false) or (stripos($capt,"@")!==false) or (stripos($mtext,"@")!==false)){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Shashtag == "false"){
if((mb_stripos($mtext,"#") !==false) or (stripos($capt,"#")!==false) or (stripos($capt,"#")!==false) or (stripos($mtext,"#")!==false)){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Slocation == "false"){
if(isset($message->location)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Svideo_note == "false"){
if(isset($message->video_note)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Sis_animated == "false"){
if(isset($message->is_animated)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Sreply_to_message == "false"){
if(isset($message->reply_to_message)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Sgame == "false"){
if(isset($message->game)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

###########################################


if(isset($text1)){
  if($cty == "group" or $cty == "supergroup"){
    if(stripos($guruhlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/group.list","$guruhlar\n$chat_id");
    }
  }else{
   $userlar = file_get_contents("stat/user.list");
   if(stripos($userlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/user.list","$userlar\n$chat_id");
   }
  }
 }


 

    if (($new_chat_members != NUll)&&($is_bot!=false)) {
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
   $vaqti = strtotime("+120 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $new_chat_members,
      'until_date'=> $vaqti,
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<b>Guruhga faqat adminlar bot qoshishi mumkin!</b>",
      'parse_mode' => 'html'
  ]);
}
}

if($text1 == "/silent" &&$fadmin==$admin){
	 if($cty == "group" or $cty == "supergroup"){
   bot('restrictChatMember',[
   'user_id'=>$rtid,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>false,
   'can_send_media_messages'=>false,
         ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$re_name *umrbod* • guruh sukunati • ro'yxatiga qo'shildi❗",
'reply_to_message_id'=>$re_msgid,
 'parse_mode'=>'markdown',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
     [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ],
	[
	['text'=>"Kanalimiz",'url'=>"https://telegram.me/Armediagroup"]
	]
    ]
    ])
]);
file_put_contents("data/$chat_id/silent.txt",$rtid);
}
}

if($text1 == "/unsilent" &&$fadmin==$admin){
 if($cty == "group" or $cty == "supergroup"){
 bot('restrictChatMember',[
   'user_id'=>$rtid,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>true,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$re_name dan *jazo* olib tashlandi endi guruhda yozishi mumkin.☝️",
'reply_to_message_id'=>$re_msgid,
 'parse_mode'=>'markdown',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
     [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ],
	[
	['text'=>"Kanalimiz",'url'=>"https://telegram.me/Armediagroup"]
	]
    ]
    ])
]);
unlink("data/$chat_id/silent.txt");
}
}

 if($text1=="/link"){
 if($cty == "group" or $cty == "supergroup"){
$link = bot('exportChatInviteLink',[
'chat_id'=>$cid,
    ]);
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"⚜️ $title Guruhi Havolasi🔺


$link",
    'parse_mode'=>'html',
     ]);
 }
}

$ismi = $update->message->from->first_name;
$ismi2 = $update->message->from->last_name;
$kanalcha = file_get_contents("kanall/$cid.txt");

if($type == "supergroup" or $type == "group"){


$grett = bot('getChatMember',[
  'chat_id' =>$chat_id,
  'user_id' => $fadmin,
  ]);
  $gret = $grett->result->status;
  
if(mb_stripos($text,"/kanal") !== false){
if($gret == "creator" or $gret == "administrator"){
$ex = explode(" ",$text);
file_put_contents("kanall/$cid.txt",$ex[1]);
$kanalcha = file_get_contents("kanall/$cid.txt");
bot('sendMessage',[
      'chat_id'=>$cid,
      'parse_mode'=>'html',
      'text'=>"💥Endi Guruhdagilar $kanalcha ga a'zo bo'lishmasa yozisholmaydilar❗️",
    ]);
}
}
  
if(isset($tx)){
  $gett = bot('getChatMember',[
  'chat_id' =>$kanalcha,
  'user_id' => $fadmin,
  ]);
  $gget = $gett->result->status;

  if($gget == "member" or $gget == "creator" or $gget == "administrator"){

    }else{
    bot('deleteMessage',[
      'chat_id'=>$cid,
      'message_id'=>$mid,
          ]);
    bot('sendMessage',[
      'chat_id'=>$cid,
      'parse_mode'=>'html',
      'text'=>"😕Hurmatli [$ismi](tg://user?id=$uid) Bu guruhda yozish uchun siz avval $kanalcha ga a'zo bo'lishingiz kerak❗️",
    ]);
  }
}
}



$chpost = $update->channel_post;
$channel_id = $chpost->chat->id;
$channel_title = $chpost->chat->title;
$channel_mid = $chpost->message_id;
$channel_title = $chpost->new_chat_title;
$soat = date("H:i", strtotime("2 hour"));
$sana = date('d.m.y',strtotime('2 hour'));


if(true){
bot ('SetChatTitle', [
'chat_id'=>"@UzBotGroup",
'title'=>"😈 U Z B O T G R O U P | $soat | B L O G C H I K 💣",
]);
bot ('SetChatDescription', [
'chat_id'=>"@UzBotGroup",
'description'=>"⚡️ U z B o t G r o u p ⚡️

😎 @UzBeK_o7 - Yangiliklar Kanali 💟

🤖 @uzFunksionbot - Sinab Ko'ring 😈

📆 $sana 🔸 $soat  🕰",
]);
}

if(isset($channel_title)){
bot ('DeleteMessage', [
'chat_id'=> $channel_id,
'message_id'=> $channel_mid,
]);
}
if(isset($channel_title)){
bot ('DeleteMessage', [
'chat_id'=> $channel_id,
'message_id'=> $channel_mid,
]);
}
if(isset($channel_title)){
bot ('DeleteMessage', [
'chat_id'=> $channel_id,
'message_id'=> $channel_mid,
]);
}

if($text == "/panel"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"🔸ADMIN PANEL🔸",
    'parse_mode' => 'html',
    'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
			'keyboard'=>[
				[['text'=>'👤Send user'],['text'=>'👥Send group']],
				[['text'=>'📡Send kanal'],['text'=>'📊Statistika']]
			]
		]),
	]);
       
}

if($text == "🔙Orqaga"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"🔸ADMIN PANEL🔸",
    'parse_mode' => 'html',
    'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
			'keyboard'=>[
				[['text'=>'👤Send user'],['text'=>'👥Send group']],
				[['text'=>'📡Send kanal'],['text'=>'📊Statistika']]
			]
		]),
	]);
       
}

if($text == "👥Guruhlar"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$guruhlar,
  'parse_mode'=>'html',
 'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
			'keyboard'=>[
				[['text'=>'🔙Orqaga']],
			]
		]),
	]);
       
}

if($text == "👤Userlar"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$userlar,
  'parse_mode'=>'html',
 'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
			'keyboard'=>[
				[['text'=>'🔙Orqaga']],
			]
		]),
	]);
       
}

if($text == "📊Statistika" or $text == "/stat"){
$gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$ka = substr_count($kanallar,"\n");
$obsh = $gr + $us + $ka;
   bot('sendmessage',[
   'chat_id'=>$admin,
    'reply_to_message_id'=>$mesid,
    'text'=> "🔸STATISTIKA🔸

👤Foydalanuvchilar: <b>$us</b>
👥Guruhlar: <b>$gr</b>
  |
🌐Umumiy: <b>$obsh</b>",
'parse_mode' => 'html',
	]);
       
}

# Ushbu Kod @UzBeK_o7 Tomonidn @iDevelopersUz kanalida Tarqatildi #
# Mangaga Tegsangiz Xafa Bo'lish Yo'q, ITARAMAN!!! #
# Ushbu Kod @uzFunksionbot ning eng yanggi versiyasi hisoblanadi #

if($text == "/start" or $text == "/start@uzFunksionbot"){
$prime = file_get_contents("prime.txt");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "😊Assalomu alaykum $ufname $uname ❗️
😍Xush kelibsiz, Men RoBotcha bo'laman🖐
💟Meni ko'proq guruhlarga qo'shing va o'sha guruh eng zo'r guruh bo'ladi💥

💎Quyidagi menyudan foydalanishingiz mumkin❗️",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[ 
[['text'=>'🔐 Buyruqlar 🔐', 'callback_data' => "stat"],['text'=>'💟 Logotiplar 💟', 'callback_data' => "logo"]],
[['text'=>'🎆 HD Fonlar 🎇', 'callback_data' => "fon"],['text'=>'🇺🇿 Telegram Tillari 🇺🇸', 'callback_data' => "til"]],
[['text'=>"👨💻 Dasturchilarga 👨💻", 'callback_data'=>"devs"],['text'=>"🔗 Inline 🔗", 'callback_data'=>"inline"]],
[['text'=>"🤑 Pul Ishlash 🤑", 'callback_data'=>"cash"],['text'=>"📢 Reklama Berish 📢", 'callback_data'=>"ads"]],
[['text'=>"💎 Statistika 💎", 'callback_data'=>"static"],['text'=>"☃️ Yangi Yil ☃️", 'callback_data'=>"newyear"]],
[['text'=>'💣 Guruhga Qoshish','url'=>'telegram.me/uzFunksionbot?startgroup=new']],
]   
]),
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "$prime",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[ 
[['text'=>'📮 Reklama Berish 📮', 'url' => "t.me/UzBeK_o7"]],
]   
]),
]);
}

if($data=="stat"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>Guruh adminlari ishlatishi mumkin bolgan buyruqlar:</b>
    
<b>/sozlama</b> - Guruhni sozlash;
<b>/ro</b> - Guruh azosini Read - Only rejimiga tushuradi;
<b>/unro</b> - Guruh azosidan cheklovni oladi;
<b>/kick</b> - Guruh azosini guruhdan chiqaradi;
<b>/warn</b> - Guruh azosiga ogohlantirish beradi va ogohlantirishlar soni 3 taga yetganda jazo sifatida guruhdan chiqaradi;
<b>/unwarn</b> - Guruh azosidagi  ogohlantirishlarni olib tashlaydi;
<b>/ban</b>  - Guruh azosini guruhdan chiqaradi, boshqa qaytib kira olmaydi;
<b>/unban</b> - Bandan oladi;
<b>/pin</b> - Xabarni yuqoriga qistiradi;
<b>/fulladmin</b> - Guruh azosini guruhga fulladmin qiladi;
<b>/admin</b> - Guruh azosini guruhga admin qiladi;
<b>/deladmin</b> - Adminlikdan oladi;
<b>/silent</b> - Bir umrga yozishdan cheklaydi;
<b>/unsilent</b> - Jazoni olib tashlaydi",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>"⚜️ Qo'shimcha Buyruqlar ⚜️",'callback_data'=>"foydali"]],
[['text'=>'💫 Orqaga qaytish', 'callback_data'=>"test"]]
]
]),
]);
}

if($data=="foydali"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>Guruhda va bot lichkasida ishlatilishi mumkin bolgan buyruqlar</b>
    
<b>/id</b> - Sizning id manzilingiz;
<b>/gid</b> - Guruhingizni id manzili;
<b>/soat</b> - O'bekiston soatini korsatadi;
<b>/sana</b> - Kun, Oy, Yilni korsatadi;
<b>/rasmqidr</b> - Siz izlaga rasmni jonatadi;
<b>/screen</b> - Saytni rasmga olib jonatadi;
<b>/adminlist</b> - Adminlar royxatini korsatadi;
<b>/link</b> - guruh linkini olib beradi
<b>/inline</b> - inline rejimdagi buyruqlar
<b>/ovoz SO'Z</b> - so'zni ovoz qilib yuboradi
<b>/ism ISM</b> - ISM ma'nosini yuboradi
<b>/musiqa MUSIQA</b> - MUSIQA ni topib beradi!
<b>/sms ID HABARINGIZ</b> - ID ostidagi foydalanuvchiga Habar jo'natish!
<b>/post-MATN-KNOPKAGA SO'Z-SSILKA</b> - Knopkalik post tayyorlash!
",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'💫 Orqaga qaytish', 'callback_data'=>"stat"]],
[['text'=>'🏡 Bosh Menyu 🏠', 'callback_data'=>"test"]],
]
]),
]);
}

if($data=="logo"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "💠Botimizda Yangi Funksiya💠

〽️Ushbu funksiya orqali siz o'zingizga juda chiroyli bo'lgan juda ko'plab logolarni oson va tez yasay olasiz❕

📌Buning uchun quyidagi amaldan foydalaning:

🗞Logolar:
/logo1 ........ /logo86 - Ko'plab LOGOlar!
/keep, /love - KEEP va LOVE ga yozish!
/QR - QR kod yaratish!
#nik SO'Z - NIK yasab beradi!

📑Foydalanish tartibi:
LOGO TEXT = /logo45 KING

😀Agarda sizda bundanda yaxshiroq LOGOlar bo'lsa adminga murojaat qiling🤑

👑Admin: @MrShefPC",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙Orqaga Qaytish','callback_data'=>'test']],
]
]),
]);
}

if($data=="fon"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "💥 Botimiz orqali Telegram foningizni takrorlanmas va HD suratlarga o'zgartiring⚡️
💟 Marhamat istalgan fonni tanlang 👇",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🖼Fon HD', 'url'=>"https://t.me/bg/JzHJF0HUAFIBAAAAYqIF-a2x4DY"],['text'=>'🗽Fon HD','url'=>"https://t.me/bg/G87eMCd6-FEBAAAApSBi5CBqx0c"]], 
[['text'=>'🖼Fon HD', 'url'=>"https://t.me/bg/Yd1Rl3CKiUkBAAAAJQbVxmElXcw"],['text'=>'🗼Fon HD','url'=>"https://t.me/bg/sp-xMi7A-VEBAAAABRn6rGsUKFs"]],
[['text'=>'🌁Fon HD', 'url'=>"https://t.me/bg/pATdUMGs-FEBAAAA0r1Q5aJbg2w"],['text'=>'⛪️Fon HD','url'=>"https://t.me/bg/Yd1Rl3CKiUkBAAAAJQbVxmElXcw"]],
[['text'=>'🏖Fon HD', 'url'=>"https://t.me/bg/pATdUMGs-FEBAAAA0r1Q5aJbg2w"],['text'=>'🌋Fon HD','url'=>"https://t.me/bg/I9m3arXQiFIBAAAAyYGQ6povw_E"]],
[['text'=>'🔙Orqaga Qaytish','callback_data'=>'test']],
]
]),
]);
}

if($data=="static"){
$gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$ka = substr_count($kanallar,"\n");
$obsh = $gr + $us + $ka;
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "🔸STATISTIKA🔸

👤Foydalanuvchilar: <b>$us</b>
👥Guruhlar: <b>$gr</b>
  |
🌐Umumiy: <b>$obsh</b>

📆 $sana 🔸 $soat  🕰",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'♻️ Yangilash ♻️','callback_data'=>'static']],
[['text'=>'🔙 Orqaga','callback_data'=>'test']],
]
]),
]);
}


if($data=="til"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "⚜️Telegramingiz tilini osongina o'zgartirish uchun quyidagi tillardan birini tanlang👇",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>"🇺🇿Узбек тили",'url'=>"tg://setlanguage?lang=uzbekcyr"]],
[['text'=>"🇺🇿O'zbek tili",'url'=>"tg://setlanguage?lang=uz-beta"]],
[['text'=>"🇷🇺Руский язик",'url'=>"tg://setlanguage?lang=ru"]],
[['text'=>"🇵🇷English Languge",'url'=>"tg://setlanguage?lang=en"]],
[['text'=>'Orqaga','callback_data'=>'test']],
]
]),
]);
}

if($data=="devs"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "💥 Dasturchilar uchun yangiliklar...

🤖 @iDevelopersUz - Kanaliga qo'shiling

/cron MANZIL VAQT - ⌚️Cron qo'yish
<i>Namuna:</i> /cron <b>https://king.zadc.ru/pr/bot.php 1 </b>

/crapp - Cron Qiladigan Dastur❗️

🎯Yordam kerak bo'lsa - @UzBeK_o7

❗️Yaqinda yana yangiliklar bo'ladi...",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'Orqaga','callback_data'=>'test']],
]
]),
]);
}

if($data=="cash"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "🤑 Telegram Tarmog'idan Mo'maygina Pul Ishlab Oling...

👇 Tanlang 👇",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'Future Net','url'=>'http://t.me/FutureNet_Uz_Bot?start=834522122']],
[['text'=>'TSCG Money','url'=>'https://t.me/TSCG_PULISHLABOT?start=834522122']],
[['text'=>'Orqaga','callback_data'=>'test']],
]
]),
]);
}

if($data=="ads"){
$gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$ka = substr_count($kanallar,"\n");
$obsh = $gr + $us + $ka;
$narxgr = $gr * 100;
$narxus = $us * 50;
$narxobsh = $obsh * 135;
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>💥Endilikda Botimizda Reklama Ham Berishingiz Mumkin⚡️</b>

1 - 📝 Habarnoma 
2 - 🎁 PRIME 

1 - 📝 Foydalanuvchilarga ko'p marotaba habar (TEXT) sifatida reklama jo'natish!
2 - 🎁 Foydalanuvchilar botga kirib /start bosgan va qo'shimcha menyulardan foydalanganda reklamani ko'rishlari!

🧩Statistika:

👤Foydalanuvchilar: <b>$us</b>
👥Guruhlar: <b>$gr</b>
  |
🌐Umumiy: <b>$obsh</b>

📊 Narxlar:
 📋Habarnoma: Foydalanuvchilarga - <b>$narxus RUB</b>
 📋Habarnoma: Guruhlarga - <b>$narxgr RUB</b>
 📋Habarnoma: Umumiy - <b>$narxobsh RUB</b>
 🎁PRIME -  <b>200 RUB!</b>

❕<b>Reklama Bermoqchi Bo'lsangiz
</b> /ads <b>Buyrug'ini Bering</b>❕",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'Admin','url'=>'http://t.me/UzBeK_o7']],
[['text'=>'Orqaga','callback_data'=>'test']],
]
]),
]);
}

if($data=="inline"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "⚡️Botimiz INLINE rejimida ham xizmat ko'rsata oladi💥
❗️Bu imkoniyat sizga kanallaringizga ham ushbu xizmatlarni taqdim etadi❕
👇Quyidagi tugmalardan foydalaning👇",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>"🆕 YANGILIKLAR 🆕",'switch_inline_query'=>"yangilik"]],
[['text'=>"🇺🇸 Telegram Tillari 🇺🇿",'switch_inline_query'=>"til"]],
[['text'=>"🕰 Dunyo Soatlari 🕰",'switch_inline_query'=>"soat"]],
[['text'=>"🆔 ID Bilan Aniqlash 🔍",'switch_inline_query'=>"id "]],
[['text'=>"🔺 Tarqatma Tayyorlash 🔺",'switch_inline_query'=>"share "]],
[['text'=>"🔰 Haqida Ma'lumot 🔰",'switch_inline_query'=>"@ "]],
[['text'=>'🔙Orqaga','callback_data'=>'test']],
]
]),
]);
}

if($data=="newyear"){
  $kun1 = date('z ',strtotime('2 hour')); 
  $a = 365;
  $c2 = $a-$kun1;
  $d = date('L ',strtotime('2 hour'));
  $b = $c2+$d;
  $f = $b+81;
  $e = $b+240;
  $kun2 = date('H ',strtotime('2 hour')); 
  $a2 = 23;
  $b2 = $a2-$kun2;
  $kun3 = date('i ',strtotime('2 hour')); 
  $a3 = 59;
  $b3 = $a3-$kun3;
  $kun4 = date('s ',strtotime('2 hour')); 
  $a4 = 60;
  $b4 = $a4-$kun4;
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "😃 Yangi Yilga:
<b>
$b KUN📆
$b2 SOAT⏰
$b3 MINUT⏲
$b4 SEKUND⏱
</b>
Qoldi🎊

😊Kelayotgan Yangi Yilingiz Bilan❕",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙Orqaga','callback_data'=>'test']],
]
]),
]);
}

if($data=="test"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "😊Assalomu alaykum $ufname $uname ❗️
😍Xush kelibsiz, Men RoBotcha bo'laman🖐
💟Meni ko'proq guruhlarga qo'shing va o'sha guruh eng zo'r guruh bo'ladi💥

💎Quyidagi menyudan foydalanishingiz mumkin❗️",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔐 Buyruqlar 🔐', 'callback_data' => "stat"],['text'=>'💟 Logotiplar 💟', 'callback_data' => "logo"]],
[['text'=>'🎆 HD Fonlar 🎇', 'callback_data' => "fon"],['text'=>'🇺🇿 Telegram Tillari 🇺🇸', 'callback_data' => "til"]],
[['text'=>"👨💻 Dasturchilarga 👨💻", 'callback_data'=>"devs"],['text'=>"🔗 Inline 🔗", 'callback_data'=>"inline"]],
[['text'=>"🤑 Pul Ishlash 🤑", 'callback_data'=>"cash"],['text'=>"📢 Reklama Berish 📢", 'callback_data'=>"ads"]],
[['text'=>"💎 Statistika 💎", 'callback_data'=>"static"],['text'=>"☃️ Yangi Yil ☃️", 'callback_data'=>"newyear"]],
[['text'=>'💣 Guruhga Qoshish','url'=>'telegram.me/uzFunksionbot?startgroup=new']],
]
]),
]);
}

if(mb_stripos($text,"/sms") !== false){
$ex = explode(" ",$text);
$sms = str_replace("/sms $ex[1]","",$text);
$ismi = $message->from->first_name;

if(mb_stripos($ex[1],"@") !== false){
$ssl = str_replace("@","",$ex[1]);
$egasi = "t.me/$ssl";
}else{
$egasi = "tg://user?id=$ex[1]";
$eegasi = "$ex[1]";
}
bot('sendmessage',[
'chat_id'=>$ex[1],
'text'=>"📨 Yangi Habar

👤Kimdan: [$ismi](tg://user?id=$uid)

💌Habar: $sms

📆 $sana 🔸 $soat 🕰",
'parse_mode'=>"markdown", 
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👤[Foydalanuvchi]($egasi)ga Habaringiz Yuborildi📩",
'parse_mode'=>"markdown", 
]);
}	

if($text=="/ads" or $text=="/ads@$botim"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"Qabul Qilindi! Kuting...",
'parse_mode'=>"markdown", 
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"[Foydalanuvchi](tg://user?id=$uid) Reklama Hohlayapti!",
'parse_mode'=>"markdown", 
]);
}

if(mb_stripos($text1,"/rasmqidr") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://yandex.ru/images/search?text=$ex[1]",
]);
}  

   if(stristr($text1,"ض") or stristr($text1, 'ص') or stristr($text1, 'ث') or stristr($text1, 'ق') or stristr($text1, 'ف') or stristr($text1, 'غ') or stristr($text1, 'ع') or stristr($text1, 'ه') or stristr($text1, 'خ') or stristr($text1, 'ح') or stristr($text1, 'ج') or stristr($text1, 'ش') or stristr($text1, 'س') or stristr($text1, 'ي') or stristr($text1, 'ب') or stristr($text1, 'ل') or stristr($text1, 'ا') or stristr($text1, 'ت') or stristr($text1, 'ن') or stristr($text1, 'م') or stristr($text1, 'ك') or stristr($text1, 'ط') or stristr($text1, 'ذ') or stristr($text1, 'ء') or stristr($text1, 'ؤ') or stristr($text1, 'ر') or stristr($text1, 'ى') or stristr($text1, 'ئ') or stristr($text1, 'ة') or stristr($text1, 'و') or stristr($text1, 'ز') or stristr($text1, 'ظ') or stristr($text1, 'د') or stristr($text1, 'أ') or stristr($text1, 'إ') or stristr($text1, 'آ')){
bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
      ]);
bot('restrictChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$user_id,
        'until_date'=>strtotime("+ 180 minutes "),
      ]);
   bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"$ufname $uname Habarida Arab Harflari Qatnashgani Uchun 3 soatga MUTE Qilindi*",
      'parse_mode'=>"markdown", 
      ]);
  }
  
 if($text1=="/adminlist" or $text1 == "/adminlist@uzFunksionbot"){
$admins = $message->chat->adminstrators;
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
   $owner2 = $result[$key]['user']['first_name'];
    }
if($found == "administrator"){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$idilar = $result[$key]['user']['id'];
$msg1 = "$msg1"."n👨🏻💻[$innames](tg://user?id=$idilar)";
  }
   }
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
👨💻*Guruh yaratuvchisi:* [$owner2](tg://user?id=$owner)
-------------------------------------
👥*Guruh adminlari:* $msg1",
'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
 ]);
}

if($mtext=="/screen" or ($mtext=="/screen@$botim")){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*😊 Bu sizga hech qiyinchiliksiz istalgan saytni screen qilib olishingiz mumkin buning uchun*  /screen https://sayt nomi n*Eslatma* https:// *bo'lish shart va albatta /screen dan so'ng bitta joy qoldiring*",
'parse_mode'=>'markdown',
'reply_to_message_id'=>$mid,
]);
}

if(mb_stripos($mtext,"/screen") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://api.site-shot.com/?url=$ex[1]",
]);
}

		if(stripos($mtext,"/soat") !== false){
		$soat = date('H:i', strtotime('2 hour'));
  $text = "⏰ Hozir soat: *$soat*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode' => 'markdown'
  ]));
}

		if(stripos($mtext,"/sana") !== false){
        $bugun = date('d-M Y',strtotime('2 hour'));
  $text = "📆 Bugungi sana: *$bugun*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($mtext,"/id") !== false){
  $text = "*🆔️ Sizning idngiz:* `$fadmin`";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($mtext,"/gid") !== false){
  $text = "*🆔️ Guruh idsi:* `$chat_id`";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if($text1 == "/ro" or $text1 == "Ro" or $text1 == "RO" or $text1 == "rO"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  $minut = strtotime("+120 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $id,
      'until_date' => $minut,
      'can_send_messages' => false,
      'can_send_media_messages' => false,
      'can_send_other_messages' => false,
      'can_add_web_page_previews' => false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<a href='tg://user?id=$id'>$from_user_first_name</a> Siz <b>Read - Only</b> rejimiga tushirildingiz!",
      'parse_mode' => 'html'
  ]);
}
}

    if($text1 == "/Kick"  or  $text1 == "kick"  or $text1 == "/kick"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  $vaqti = strtotime("+1 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $id,
      'until_date'=> $vaqti,
  ]);
  bot('unbanChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
    ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>kick</b> boldi!",
      'parse_mode' => 'html'
  ]);
}
}

if($text1 =="/ban" or $text1 == "Xayr"&&$fadmin==$admin){
       $vaqti = strtotime("+10800000 minutes");
      bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "<a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>ban</b> boldingiz!",
        'parse_mode'=>'html'
    ]);
  }
/*
    if((stripos($mtext,"dalbayop")!==false)  or (stripos($mtext,"oneni")!==false)  or (stripos($mtext,"skaman")!==false) or (stripos($mtext,"sikaman")!==false) or (stripos($mtext,"Axmoq")!==false) or (stripos($mtext,"chumo")!==false)  or  (stripos($mtext,"dalbayob")!==false) or  (stripos($mtext,"skay")!==false) or (stripos($mtext,"seks")!==false) or (stripos($mtext,"dalban")!==false) or (stripos($mtext,"yiban")!==false) or (stripos($mtext,"jalab")!==false) or (stripos($mtext,"koten")!==false) or (stripos($mtext,"qanjiq")!==false) or (stripos($mtext,"ktk")!==false)  or  (stripos($mtext,"am")!==false) or  (stripos($mtext,"шшс")!==false) or (stripos($mtext,"пшн")!==false) or (stripos($mtext,"ктк")!==false) or (stripos($mtext,"котагим")!==false) or (stripos($mtext,"haqorat")!==false) or (stripos($mtext,"sex")!==false) or (stripos($mtext,"seks")!==false) or (stripos($mtext,"kotinga")!==false) or  (stripos($mtext,"latta")!==false)  or  (stripos($mtext,"qotoq")!==false) or  (stripos($mtext,"naxuy")!==false) or (stripos($mtext,"mol")!==false) or (stripos($mtext,"eshek")!==false) or (stripos($mtext,"suchka")!==false) or (stripos($mtext,"suka")!==false) or (stripos($mtext,"koten")!==false) or  (stripos($mtext,"kotin")!==false)  or  (stripos($mtext,"qotaq")!==false) or  (stripos($mtext,"qoto")!==false) or (stripos($mtext,"qotoq")!==false) or (stripos($mtext,"omingni")!==false) or (stripos($mtext,"ominga")!==false) or (stripos($mtext,"gandon")!==false) and $fadmin !== $admin){
    $gett = bot('getChatMember', [
   'chat_id' => $chat_id,
   'user_id' => $fadmin,
   ]);
  $get = $gett->result->status;
  if($get =="member"){
     $minut = strtotime("+10800 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('deleteMessage', [
       'chat_id' => $chat_id,
       'message_id' => $mid
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "<a href='tg://user?id=$fadmin'>$first_name</a> <b>3 kun</b>ga <b>Read - Only</b> rejimiga tushdirildi.n<b>Sabab: Haqorat qildi!</b> ",
        'parse_mode' => 'html'
    ]);
}
}
*/

if((stripos($mtext,"/panel")!==false) or (stripos($mtext,"/sozlama")!==false) or (stripos($mtext,"/warn")!==false) or (stripos($mtext,"/kick")!==false) or (stripos($mtext,"/unwarn")!==false) or (stripos($mtext,"/info")!==false) or (stripos($mtext,"/sozlamalar")!==false) or (stripos($mtext,"/ban")!==false) and $fadmin !== $admin){
    $gett = bot('getChatMember', [
   'chat_id' => $chat_id,
   'user_id' => $fadmin,
   ]);
  $get = $gett->result->status;
  if($get =="member"){
     $minut = strtotime("+1 minut");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('deleteMessage', [
       'chat_id' => $chat_id,
       'message_id' => $mid
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "<a href='tg://user?id=$fadmin'>$first_name</a> <b>1 minut</b>ga <b>Read - Only</b> rejimiga tushdirildi.n<b>Sabab: admin buyruqlarini ishlatdi!</b> ",
        'parse_mode' => 'html'
    ]);
}
}

 if($text1 == "/admin"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> Sizni tabriklayman, Siz endi guruh <b>administratorisiz</b>",
    'parse_mode'=>'html'
  ]);
}
}

if($text1 == "/fulladmin"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>true,
    'can_edit_messages'=>true,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> Sizni tabriklayman, Siz endi guruhda <b>fulladministratorisiz</b>",
    'parse_mode'=>'html'
  ]);
}
}

   if($text1 == "/deladmin"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get == "administrator" or $get == "creator"){
bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>false,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>false,
    'can_invite_users'=>false,
    'can_restrict_members'=>false,
    'can_pin_messages'=>false,
    'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> Siz endi guruh administratori <b>emassiz</b>",
    'parse_mode'=>'html'
  ]);
}
}

  if($text1 == "/unro" or $text1 == "UNRO" or $text1 == "unro"){
 $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_send_messages'=>true,
    'can_send_media_messages'=>true,
    'can_send_other_messages'=>true,
    'can_add_web_page_previews'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> Sizdan cheklov olindi, guruhda <b>yozishingiz mumkin!</b>nEndi qoidani <b>buzmaysiz</b> degan umiddaman",
    'parse_mode'=>'html'
  ]);
}
}

if($text1 == "/pin" or $text1 == "Pin" or $text1 == "PIn" or $text1 == "PIN" or $text1 == "piN" or $text1 == "pIN" or $text1 == "pIn" or $text1 == "pIN"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
  ]);
}
}

if($text1=="/leave"&&$fadmin==$admin) {
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<b>Hop xojayin, guruhni tark etaman!</b>.",
      'parse_mode' => 'html'
  ]);
  bot('leaveChat',[
    'chat_id'=>$chat_id
  ]);
}

if((stripos($mtext,"ping")!==false) and $fadmin == $admin){
      $sx=explode("n",$text1);
      $matn = $sx[2];
      $idsi  = $sx[1];
  bot('sendMessage',[
       'chat_id'=>$idsi,
       'text'=>$matn,
       'parse_mode'=>'markdown',
       'disable_web_page_preview' => true,
       ]);
   bot('sendMessage',[
       'chat_id'=>$admin,
       'text'=>"pong",
       ]);
  }

 if($text1 == "ban" or $text1 == "Ban" or $text1== "/Ban" or  $text1 == "/ban"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
       $vaqti = strtotime("+108000000 minutes");
      bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "<a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>ban</b> boldi!",
        'parse_mode'=>'html'
    ]);
  }
  }

 if($text1 == "Unban"  or  $text1 == "/unban"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
    bot('unbanChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "<a href='tg://user?id=$id'>$from_user_first_name</a> <b>ban</b>dan olindi!",
        'parse_mode'=>'html'
    ]);
}
}

if($text1 == "warn" or $text1 == "Warn" or $text1 == "/warn"){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$warn = file_get_contents("warn/$chat_id&$id.dat");
if($warn){
$warn +=1;
file_put_contents("warn/$chat_id&$id.dat","$warn");
if($warn !=3){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$oldi = bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> <b>ogohlantirish oldi.</b>nEndi undagi ogohlantirishlar soni: <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
}else{
 bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
 bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> shu vaqtgacha unga berilgan ogohlantirishlarga <b>befarq boldi</b>, jazo sifatida esa guruhdan <b>chetlatiladi!</b>",
  'parse_mode'=>'html'
  ]);
 $vaqti = strtotime("+120 minutes");
  bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
 $warn = 0;
file_put_contents("warn/$chat_id&$id.dat","$warn");
}
}else{
$warn = 1;
file_put_contents("warn/$chat_id&$id.dat","$warn");
bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> <b>ogohlantirish oldi.</b>nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
}
}
}

  if($text1 == "unwarn" or $text1 == "Unwarn" or $text1 == "/unwarn"){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
 $warn = 0;
 file_put_contents("warn/$chat_id&$id.dat","$warn");
 bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> dan barcha <b>ogohlantirishlar</b> olib tashlandi.nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
} 
}

# Ushbu Kod @UzBeK_o7 Tomonidn @iDevelopersUz kanalida Tarqatildi #
# Mangaga Tegsangiz Xafa Bo'lish Yo'q, ITARAMAN!!! #
# Ushbu Kod @uzFunksionbot ning eng yanggi versiyasi hisoblanadi #

$replyik = $message->reply_to_message->text;
    $yubbi = "📩 Yuboriladigan xabar matnini kiriting. Xabar turi markdown";

    if($text == "👤Send user" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","user");
    }

    if($step == "user" and $chat_id == $admin){
      if($text == "/no"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("n",$userlar);
      foreach($idszs as $idlat){
     $userr = bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>"$text",
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Userlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }   
	
      
       if($text == "👥Send group" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","guruh");
    }

    if($step == "guruh" and $chat_id == $admin){
      if($text == "/no"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("n",$guruhlar);
      foreach($idszs as $idlat){
    $guruu =  bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>"$text",
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($guruu){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Guruhlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
}

if($text == "📡Send kanal" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","kanal");
    }
    if($step == "kanal" and $chat_id == $admin){
      if($text == "/no"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("n",$kanallar);
      foreach($idszs as $idlat){

     $userr = bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>"$text",
      'parse_mode'=>'markdown',
      ]);
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Kanallarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    } 

if(isset($update) and $Skirish == "true"){
if(isset($message->new_chat_member) or isset($message->left_chat_member)!==false){
    bot('deleteMessage',[
        'chat_id'=>$message->chat->id,
        'message_id'=>$message->message_id,
    ]);
}
}

//Yangi yilga qolgan vaqt
if($text=="/yangi_yil" or $text=="/yangi_yil$botim"){
  $kun1 = date('z ',strtotime('2 hour')); 
  $a = 365;
  $c2 = $a-$kun1;
  $d = date('L ',strtotime('2 hour'));
  $b = $c2+$d;
  $f = $b+81;
  $e = $b+240;
  $kun2 = date('H ',strtotime('2 hour')); 
  $a2 = 23;
  $b2 = $a2-$kun2;
  $kun3 = date('i ',strtotime('2 hour')); 
  $a3 = 59;
  $b3 = $a3-$kun3;
  $kun4 = date('s ',strtotime('2 hour')); 
  $a4 = 60;
  $b4 = $a4-$kun4;
  $yytxt="🎅 <b>Yangi yilga $b kun, $b2 soat, $b3 minut, $b4 sekund qoldi!</b> ⛄";
  bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>$yytxt,
    'parse_mode'=>'html',
  ]);
}
if($text=="/ob_havo" or $text=="/ob_havo$botim"){
  $text = "Bugungi <b>OB - HAVO</b> ma'lumoti bilan tanishish uchun quyidagi manzillardan birini tanlang!";
  bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>$text,
    'parse_mode'=>'html',
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 [['text'=>"⛅ Farg'ona",'callback_data'=>"far"],
 ['text'=>"⛅ Xiva",'callback_data'=>"xiv"]],
 [['text'=>"⛅ Andijon",'callback_data'=>"and"],
 ['text'=>"⛅ Namangan",'callback_data'=>"nam"]],
 [['text'=>"⛅ Buxoro",'callback_data'=>"bux"],
 ['text'=>"⛅ Guliston",'callback_data'=>"gul"]],
 [['text'=>"⛅ Jizzax",'callback_data'=>"jiz"],
 ['text'=>"⛅ Zarafshon",'callback_data'=>"zar"]],
 [['text'=>"⛅ Qarshi",'callback_data'=>"qar"],
 ['text'=>"⛅ Navoiy",'callback_data'=>"nav"]],
 [['text'=>"⛅ Nukus",'callback_data'=>"nuk"],
 ['text'=>"⛅ Samarqand",'callback_data'=>"sam"]],
 [['text'=>"⛅ Termiz",'callback_data'=>"ter"],
 ['text'=>"⛅ Urganch",'callback_data'=>"urg"]],
 [['text'=>"⛅ Toshkent",'callback_data'=>"tosh"]],
        ]
        ])
  ]);
}
if($data=="far"){
$anb8 = file_get_contents('http://obhavo.uz/ferghana'); $ex1=explode("n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Farg'ona
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="tosh"){
$anb8 = file_get_contents('http://obhavo.uz/tashkent'); $ex1=explode("n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Toshkent
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="and"){
$anb8 = file_get_contents('http://obhavo.uz/andijan'); $ex1=explode("n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Andijon
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="nam"){
$anb8 = file_get_contents('http://obhavo.uz/namangan'); $ex1=explode("n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Namangan
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="bux"){
$anb8 = file_get_contents('http://obhavo.uz/bukhara'); $ex1=explode("n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]);
$havo1 = str_replace('','‘',$havo1);
  $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Buxoro
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="gul"){
$anb8 = file_get_contents('http://obhavo.uz/gulistan'); $ex1=explode("n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Guliston
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="jiz"){
$anb8 = file_get_contents('http://obhavo.uz/jizzakh'); $ex1=explode("n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Jizzah
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="zar"){
$anb8 = file_get_contents('http://obhavo.uz/zarafshan'); $ex1=explode("n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]); 
 $sha = str_replace('','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Zarafshon
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="qar"){
$anb8 = file_get_contents('http://obhavo.uz/karshi'); $ex1=explode("n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Qarshi
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="nav"){
$anb8 = file_get_contents('http://obhavo.uz/navoi'); $ex1=explode("n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]); 
 $sha = str_replace('','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Navoiy
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="nuk"){
$anb8 = file_get_contents('http://obhavo.uz/nukus'); $ex1=explode("n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Nukus
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="ter"){
$anb8 = file_get_contents('http://obhavo.uz/termez'); $ex1=explode("n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Termiz
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="urg"){
$anb8 = file_get_contents('http://obhavo.uz/urgench'); $ex1=explode("n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Urganch
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="xiv"){
$anb8 = file_get_contents('http://obhavo.uz/khiva'); $ex1=explode("n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Xiva
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="sam"){
$anb8 = file_get_contents('http://obhavo.uz/samarkand'); $ex1=explode("n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Samarqand
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($text=="/yangilik" or $text=="/yangilik$botim"){
  $text = "Bugungi eng so'ngi yangilik bilan tanishish uchun, <b>🆕 YANGILIKLAR 🆕</b> tugmasini bosing! (ESLATMA!!! Ushbu yangilik DARYO.UZ saytidan olindi!)";
  bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>$text,
    'parse_mode'=>'html',
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🆕 YANGILIKLAR 🆕",'callback_data'=>"yangilik"]],
        ]
        ])
  ]);
}
  $url = 'https://daryo.uz/feed/';
  $rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item){
  $line = $item->title;
  break;
}  
if($data=="yangilik"){
  $soat = date('H:i', strtotime('2 hour'));
  bot('answerCallbackQuery',[
    'callback_query_id'=>$cqid,
    'chat_id'=>$ccid, 
    'text'=>"📰 $line

⏰ Soat: $soat",
   'show_alert'=>true,
   'parse_mode'=>'html',
  ]);
}
if($text=="/kurs" or $text=="/kurs$botim"){
  $text = "Bugungi valyuta kursini bilish uchun <b>💱 VALYUTA KURSI 💱</b> tugmasini bosing!";
  bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>$text,
    'parse_mode'=>'html',
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"💱 VALYUTA KURSI 💱",'callback_data'=>"kurs"]],
        ]
        ])
  ]);
}
if($data == 'kurs'){
  $soat = date('H:i', strtotime('2 hour'));
  bot('answerCallbackQuery',[
    'callback_query_id'=>$cqid,
    'chat_id'=>$ccid,
    'text'=>kurs()."
⏰ Soat: $soat",
    'show_alert'=>true,
    'parse_mode'=>'html',
]);
}
if($text=="/inline" or $text=="/inline$botim"){
  $text = "⚡️Botimiz INLINE rejimida ham xizmat ko'rsata oladi💥
❗️Bu imkoniyat sizga kanallaringizga ham ushbu xizmatlarni taqdim etadi❕
👇Quyidagi tugmalardan foydalaning👇";
  bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>$text,
    'parse_mode'=>'html',
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🆕 YANGILIKLAR 🆕",'switch_inline_query'=>"yangilik"]],
[['text'=>"🇺🇸 Telegram Tillari 🇺🇿",'switch_inline_query'=>"til"]],
[['text'=>"🕰 Dunyo Soatlari 🕰",'switch_inline_query'=>"soat"]],
[['text'=>"🆔 ID Bilan Aniqlash 🔍",'switch_inline_query'=>"id "]],
[['text'=>"🔺 Tarqatma Tayyorlash 🔺",'switch_inline_query'=>"share "]],
        ]
        ])
  ]);
}
//inline

$iuid = $update->inline_query->from->id;
$iid = $update->inline_query->id;
$icid = $update->inline_query->chat->id;
$imid = $update->inline_query->message->id;
$bot = '@'.bot('getme',['bot'])->result->username;
$query = $update->inline_query->query;

if(mb_stripos($query,"obhavo")!==false){
  bot('answerInlineQuery',[
    'inline_query_id'=>$iid,
    'cache_time'=>1,
    'results'=>json_encode([[
    'type'=>'article',
    'thumb_url'=>"https://izzatbek8252.000webhostapp.com/polo/obhavo.jpg",
    'id'=>base64_encode(1),
    'title'=>"⛅ OB-HAVO ma'lumoti ⛅",
    'input_message_content'=>[
    'disable_web_page_preview'=>true,
    'parse_mode'=>'html',
    'message_text'=>"Bugungi <b>OB - HAVO</b> ma'lumoti bilan tanishish uchun quyidagi manzillardan birini tanlang!",
  ],
    'reply_markup'=>[
            'inline_keyboard'=>[
 [['text'=>"⛅ Farg'ona",'callback_data'=>"far"],
 ['text'=>"⛅ Xiva",'callback_data'=>"xiv"]],
 [['text'=>"⛅ Andijon",'callback_data'=>"and"],
 ['text'=>"⛅ Namangan",'callback_data'=>"nam"]],
 [['text'=>"⛅ Buxoro",'callback_data'=>"bux"],
 ['text'=>"⛅ Guliston",'callback_data'=>"gul"]],
 [['text'=>"⛅ Jizzax",'callback_data'=>"jiz"],
 ['text'=>"⛅ Zarafshon",'callback_data'=>"zar"]],
 [['text'=>"⛅ Qarshi",'callback_data'=>"qar"],
 ['text'=>"⛅ Navoiy",'callback_data'=>"nav"]],
 [['text'=>"⛅ Nukus",'callback_data'=>"nuk"],
 ['text'=>"⛅ Samarqand",'callback_data'=>"sam"]],
 [['text'=>"⛅ Termiz",'callback_data'=>"ter"],
 ['text'=>"⛅ Urganch",'callback_data'=>"urg"]],  
[['text'=>"⛅ Toshkent",'callback_data'=>"tosh"]],
        ]],
        ]
        ])
]);
}
if(mb_stripos($query,"kurs")!==false){
  bot('answerInlineQuery',[
    'inline_query_id'=>$iid,
    'cache_time'=>1,
    'results'=>json_encode([[
    'type'=>'article',
    'thumb_url'=>"https://izzatbek8252.000webhostapp.com/polo/kurs.jpg",
    'id'=>base64_encode(1),
    'title'=>"💱 VALYUTA KURSI 💱",
    'input_message_content'=>[
    'disable_web_page_preview'=>true,
    'parse_mode'=>'html',
    'message_text'=>"Bugungi valyuta kursini bilish uchun <b>💱 VALYUTA KURSI 💱</b> tugmasini bosing!",
  ],
    'reply_markup'=>[
            'inline_keyboard'=>[
 [['text'=>"💱 VALYUTA KURSI 💱",'callback_data'=>"kurs"]],
        ]],
        ]
        ])
]);
}
if(mb_stripos($query,"yangilik")!==false){
  bot('answerInlineQuery',[
    'inline_query_id'=>$iid,
    'cache_time'=>1,
    'results'=>json_encode([[
    'type'=>'article',
    'thumb_url'=>"https://izzatbek8252.000webhostapp.com/polo/yangilik.jpg",
    'id'=>base64_encode(1),
    'title'=>"🆕 YANGILIKLAR 🆕",
    'input_message_content'=>[
    'disable_web_page_preview'=>true,
    'parse_mode'=>'html',
    'message_text'=>"Bugungi eng so'ngi yangilik bilan tanishing, <b>🆕 YANGILIKLAR 🆕</b> tugmasini bosing! (ESLATMA!!! Ushbu yangilik DARYO.UZ saytidan olindi!)",
  ],
    'reply_markup'=>[
            'inline_keyboard'=>[
 [['text'=>"🆕 YANGILIKLAR 🆕",'callback_data'=>"yangilik"]],
        ]],
        ]
        ])
]);
}
if(mb_stripos($query,"id")!==false){
	$ex=explode(" ",$query);
  bot('answerInlineQuery',[
    'inline_query_id'=>$iid,
    'cache_time'=>1,
    'results'=>json_encode([[
    'type'=>'article',
    'id'=>base64_encode(1),
    'title'=>"🆔Foydalanuvchi🆔",
    'input_message_content'=>[
    'disable_web_page_preview'=>true,
    'parse_mode'=>'markdown',
    'message_text'=>"😀Berilgan ID ostidagi [Foydalanuvchi](tg://user?id=$ex[1])",
  ],
    'reply_markup'=>[
            'inline_keyboard'=>[
 [['text'=>"🆔Foydalanuvchi🆔",'url'=>"tg://user?id=$ex[1]"]],
        ]],
        ]
        ])
]);
}
if(mb_stripos($query,"share")!==false){
	$ex=explode(" ",$query);
	$tarqatma = str_replace("@uzFunksionbot share","",$query);
  bot('answerInlineQuery',[
    'inline_query_id'=>$iid,
    'cache_time'=>1,
    'results'=>json_encode([[
    'type'=>'article',
    'id'=>base64_encode(1),
    'title'=>"↖️Share Havola↗️",
    'input_message_content'=>[
    'disable_web_page_preview'=>true,
    'parse_mode'=>'html',
    'message_text'=>"👌Share havola tayyor bo'ldi❕

🌐Quyidagi tugmani bosib tarqatishingiz mumkin👇",
  ],
    'reply_markup'=>[
            'inline_keyboard'=>[
 [['text'=>"🔺SHARE🔺",'url'=>"https://t.me/share/url?url=$tarqatma"]],
        ]],
        ]
        ])
]);
}
if(mb_stripos($query,"til")!==false){
  bot('answerInlineQuery',[
    'inline_query_id'=>$iid,
    'cache_time'=>1,
    'results'=>json_encode([[
    'type'=>'article',
    'id'=>base64_encode(1),
    'title'=>"🇺🇿Telegram Tillari🇱🇷",
    'input_message_content'=>[
    'disable_web_page_preview'=>true,
    'parse_mode'=>'html',
    'message_text'=>"⚜️Telegramingiz tilini osongina o'zgartirish uchun quyidagi tillardan birini tanlang👇",
  ],
    'reply_markup'=>[
            'inline_keyboard'=>[
[['text'=>"🇺🇿Узбек тили",'url'=>"tg://setlanguage?lang=uzbekcyr"]],
[['text'=>"🇺🇿O'zbek tili",'url'=>"tg://setlanguage?lang=uz-beta"]],
[['text'=>"🇷🇺Руский язик",'url'=>"tg://setlanguage?lang=ru"]],
[['text'=>"🇵🇷English Languge",'url'=>"tg://setlanguage?lang=en"]],
        ]],
        ]
        ])
]);
}
if(mb_stripos($query,"ism")!==false){
	$ex=explode(" ",$query);
	$ism = file_get_contents("https://ismlar.com/search/$ex[1]");
  $exp = explode('<p class="text-size-5">',$ism);
  $expl = explode('<div class="col-12 col-md-4 text-md-right">',$exp[1]);
  $im = str_replace($expl[1],' ',$exp[1]);
  $ims = str_replace('</p>',' ',$im);
  $isms = str_replace('</div>',' ',$ims);
  $ismn = str_replace('<div class="col-12 col-md-4 text-md-right">',' ',$isms);
  $ismk = str_replace('','`',$ismn);
  $ismm = trim("$ismk");
  bot('answerInlineQuery',[
    'inline_query_id'=>$iid,
    'cache_time'=>1,
    'results'=>json_encode([[
    'type'=>'article',
    'id'=>base64_encode(1),
    'title'=>"📕Ismlar Ma'nosi📘",
    'input_message_content'=>[
    'disable_web_page_preview'=>true,
    'parse_mode'=>'html',
    'message_text'=>"<b>📚 ISMLAR MA'NOSI 📚

🔍 $ex[1]

📑 Manosi:</b> <i>$ismm</i>!",
  ],
    'reply_markup'=>[
            'inline_keyboard'=>[
 [['text'=>"by uzFunksionbot",'url'=>"https://t.me/uzFunksionbot"]],
        ]],
        ]
        ])
]);
}


if(mb_stripos($query,"soat")!==false){
	$timeuz = date('H:i', strtotime('2 hour'));
	$timeusa = date('H:i', strtotime('-2 hour'));
	$timeru = date('H:i', strtotime('3 hour'));
	$timeya = date('H:i', strtotime('9 hour'));
	$timeis = date('H:i', strtotime('1 hour'));
  bot('answerInlineQuery',[
    'inline_query_id'=>$iid,
    'cache_time'=>1,
    'results'=>json_encode([[
    'type'=>'article',
    'id'=>base64_encode(1),
    'title'=>"🕰Dunyo Soatlari🕰",
    'input_message_content'=>[
    'disable_web_page_preview'=>true,
    'parse_mode'=>'html',
    'message_text'=>"
🕰<b>Dunyo Soatlari</b>🕰

🇺🇿O'zbekiston: <b>$timeuz</b>
🇺🇸Washington: <b>$timeusa</b>
🇳🇱Россия: <b>$timeru</b>
🇯🇵Yaponiya: <b>$timeya</b>
🇪🇸Ispaniya: <b>$timeis</b>

📆<b> $date </b>📆",
],
]])
]);
}
$userID = $update->inline_query->from->id;
$theQuery = $update->inline_query->query;
$cidd = $update->inline_query->query;
if(mb_stripos($cidd,"@")!==false){
$user = bot("getchat",[
	'chat_id'=>$cid,
	]);
$type = $user->result->type;
$id = $user->result->id;
$infos = $user->result->description;
$atitle = $user->result->title;
$us = bot('getChatMembersCount',[
	'chat_id'=>$cid
	]);
$count = $us->result;
if($type=="channel"){
bot('answerInlineQuery', [
'inline_query_id'=>$update->inline_query->id,
'cache_time'=>1,
'results'=>json_encode([[
'type'=>'article',
'id'=>base64_encode(1),
'title'=>"🔰 $atitle - Haqida Ma'lumot❕",
'input_message_content'=>[
'disable_web_page_preview'=>true,
'parse_mode' => 'markdown',
'message_text'=>"🧢Turi: **KANAL📡**
🕉Nomi: [$atitle](t.me/$cid)
🔗Useri: $cid
👥A'zolari: **$count**
🆔ID: **$id**
📋Info: $infos",
],
'reply_markup' =>
[ 'inline_keyboard'=>[
                   [["switch_inline_query"=>"@", 'text' => "🆔Aniqlash"],],
               ] ],

]
])
]);
}

if($type=="supergroup"){
bot('answerInlineQuery', [
'inline_query_id'=>$update->inline_query->id,
'cache_time'=>1,
'results'=>json_encode([[
'type'=>'article',
'id'=>base64_encode(1),
'title'=>"🔰 $atitle - Haqida Ma'lumot❕",
'input_message_content'=>[
'disable_web_page_preview'=>true,
'parse_mode' => 'markdown',
'message_text'=>"*🧢Turi: **KANAL📡**
🕉Nomi: [$atitle](t.me/$cid)
🔗Useri: $cid
👥A'zolari: **$count**
🆔ID: **$id**
📋Info: $infos",
],
'reply_markup' =>
[ 'inline_keyboard'=>[
                   [["switch_inline_query"=>"@", 'text' => "🆔Aniqlash"],],
               ] ],

]
])
]);
}
}
if($data == 'uzb'){
  $soat = date('H:i', strtotime('2 hour'));
  bot('answerCallbackQuery',[
    'callback_query_id'=>$cqid,
    'chat_id'=>$ccid,
    'text'=>"
🇺🇿O'zbekiston: $soat",
    'show_alert'=>true,
    'parse_mode'=>'html',
]);
}
if($data == 'wash'){
  $soat = date('H:i', strtotime('-2 hour'));
  bot('answerCallbackQuery',[
    'callback_query_id'=>$cqid,
    'chat_id'=>$ccid,
    'text'=>"
🇺🇸Washington: $soat",
    'show_alert'=>true,
    'parse_mode'=>'html',
]);
}
if($data == 'rus'){
  $soat = date('H:i', strtotime('3 hour'));
  bot('answerCallbackQuery',[
    'callback_query_id'=>$cqid,
    'chat_id'=>$ccid,
    'text'=>"
🇳🇱Россия: $soat",
    'show_alert'=>true,
    'parse_mode'=>'html',
]);
}
if($data == 'yap'){
  $soat = date('H:i', strtotime('9 hour'));
  bot('answerCallbackQuery',[
    'callback_query_id'=>$cqid,
    'chat_id'=>$ccid,
    'text'=>"
🇯🇵Yaponiya: $soat",
    'show_alert'=>true,
    'parse_mode'=>'html',
]);
}
if($data == 'isp'){
  $soat = date('H:i', strtotime('1 hour'));
  bot('answerCallbackQuery',[
    'callback_query_id'=>$cqid,
    'chat_id'=>$ccid,
    'text'=>"
🇪🇸Ispaniya: $soat",
    'show_alert'=>true,
    'parse_mode'=>'html',
]);
}


if(mb_stripos($text,"/post") !== false){ 
$ex = explode("-",$text);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$ex[1]",
'parse_mode'=>"markdown",
    'reply_markup'=> json_encode([
    'inline_keyboard'=>[
[['text'=>"$ex[2]", 'url'=>"$ex[3]"]],
]
])
]);
} 

if(mb_stripos($text,"/search") !== false){ 
$matn = str_replace("/search ","",$text);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"🔍 Qidiruv 
☑️ : $matn",
'parse_mode'=>"Markdown",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[
['text'=>"App store 🌐", 'url'=>"https://www.apple.com/us/search?q=$matn"],
],
[
['text'=>"Google 📈", 'url'=>"https://www.google.com.iq/search?q=$matn"],
],
[
['text'=>"Youtube 🎥", 'url'=>"https://m.youtube.com/results?q=$matn&sm=3"],
],
[
['text'=>"instagram 📯", 'url'=>"https://www.instagram.com/$matn"],
],

[
['text'=>"Telegram 📪", 'url'=>"https://www.telegram.me/$matn"],
],
[
['text'=>"Github 🐱", 'url'=>"https://github.com/search?utf8=✓&q=$matn"],
],
]
])
]);

}

if($type=="supergroup"){
	if($get=="administrator" or $get=="creator"){
if(mb_stripos($text,"/title") !== false){ 
  $ex=explode(" ",$text);
bot('setChatTitle',[
'chat_id'=>$message->chat->id,
'title'=>"
$ex[1]
",]);
bot('sendMessage',[
'chat_id'=>$message->chat->id,
'text'=>"
Guruh NOMI: $ex[1] ga o'zgartirildi!
",]);

}
if(mb_stripos($text,"/desc") !== false){ 
  $ex=explode(" ",$text);
bot('setChatDescription',[
'chat_id'=>$message->chat->id,
'description'=>"
$ex[1]
",]);
bot('sendMessage',[
'chat_id'=>$message->chat->id,
'text'=>"
Guruh INFOSI: $ex[1] ga o'zgartirildi!
",]);

}
if($text=="/photo"){
bot('setChatPhoto',[
'chat_id'=>$message->chat->id,
'photo'=>$repmid,
]);
bot('sendMessage',[
'chat_id'=>$message->chat->id,
'text'=>"
Guruh SURATI: $repmid ga o'zgartirildi!
",]);

}
}
}
if(mb_stripos($text,"/ism") !== false){ 
  $ex=explode(" ",$text);
  $ism = file_get_contents("https://ismlar.com/search/$ex[1]");
  $exp = explode('<p class="text-size-5">',$ism);
  $expl = explode('<div class="col-12 col-md-4 text-md-right">',$exp[1]);
  $im = str_replace($expl[1],' ',$exp[1]);
  $ims = str_replace('</p>',' ',$im);
  $isms = str_replace('</div>',' ',$ims);
  $ismn = str_replace('<div class="col-12 col-md-4 text-md-right">',' ',$isms);
  $ismk = str_replace('','`',$ismn);
  $ismm = trim("$ismk");
  bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>"<b>📚 ISMLAR MA'NOSI 📚

🔍 $ex[1]

📑 Manosi:</b> <i>$ismm</i>!
",
    'parse_mode'=>'html',
  ]);
  }
  

if(mb_stripos($text,"/musiqa") !== false){
$ex=explode(" ",$text);
$music = str_replace("/musiqa","",$text);
$v = file_get_contents("https://xits.pro/search/$ex[1]");
$vk = 'Master'.$v.'
<div class="mp3">
                <i class="fa fa-play-circle-o"></i>                <a"/musiqa/6312_Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos.html">Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos</a>             </div>
<div class="mp3">
                <i class="fa fa-play-circle-o"></i>                <a"/musiqa/6312_Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos.html">Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos</a>             </div>
<div class="mp3">
                <i class="fa fa-play-circle-o"></i>                <a"/muz/6312_Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos.html">Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos</a>             </div>
<div class="mp3">
                <i class="fa fa-play-circle-o"></i>                <a"/muz/6312_Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos.html">Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos</a>             </div>
<div class="mp3">
                <i class="fa fa-play-circle-o"></i>                <a"/muz/6312_Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos.html">Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos</a>             </div>
<div class="mp3">
                <i class="fa fa-play-circle-o"></i>                <a"/musiqa/6312_Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos.html">Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos</a>             </div>
<div class="mp3">
                <i class="fa fa-play-circle-o"></i>                <a"/musiqa/6312_Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos.html">Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos</a>             </div>
<div class="mp3"> <i class="fa fa-play-circle-o"></i> <a"/musiqa/6312_Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos.html">Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos</a> </div>
<div class="mp3"> <i class="fa fa-play-circle-o"></i> <a"/musiqa/6312_Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos.html">Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos</a> </div>';
file_put_contents("$uid.get.txt",$vk);
$zb = file_get_contents("$uid.get.txt");
$ex1 = explode("fa fa-play-circle-o",$zb);
$ex12 = explode("</div>",$ex1[1]);
$ex22 = explode("</div>",$ex1[2]);
$ex32 = explode("</div>",$ex1[3]);
$ex42 = explode("</div>",$ex1[4]);
$ex52 = explode("</div>",$ex1[5]);
$ex62 = explode("</div>",$ex1[6]);
$ex72 = explode("</div>",$ex1[7]);
$ex82 = explode("</div>",$ex1[8]);
$ex92 = explode("</div>",$ex1[9]);
$ex102 = explode("</div>",$ex1[10]);
if(mb_stripos($ex12[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex12[0]);
$t = str_replace('&#039;','`',$t);
$m1 = trim($t);
$m1 = "
🎶 <b>Qidiruv natijalari:</b>

/1 . $m1";
}else{
$m1 = "Siz qidirayotgan musiqa topilmadi 😔";
}
if(mb_stripos($ex22[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex22[0]);
$t = str_replace('&#039;','`',$t);
$m2 = trim($t);
$m2 = "2️⃣ $m2";
}else{
$m2 = "";
}

if(mb_stripos($ex32[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex32[0]);
$t = str_replace('&#039;','`',$t);
$m3 = trim($t);
$m3 = "3️⃣ $m3";
}else{
$m3 = "";
}

if(mb_stripos($ex42[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex42[0]);
$t = str_replace('&#039;','`',$t);
$m4 = trim($t);
$m4 = "4️⃣ $m4";
}else{
$m4 = "";
}
if(mb_stripos($ex52[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex52[0]);
$t = str_replace('&#039;','`',$t);
$m5 = trim($t);
$m5 = "5️⃣ $m5";
}else{
$m5 = "";
}
if(mb_stripos($ex62[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex62[0]);
$t = str_replace('&#039;','`',$t);
$m6 = trim($t);
$m6 = "6️⃣ $m6";
}else{
$m6 = "";
}
if(mb_stripos($ex72[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex72[0]);
$t = str_replace('&#039;','`',$t);
$m7 = trim($t);
$m7 = "7️⃣ $m7";
}else{
$m7 = "";
}
if(mb_stripos($ex82[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex82[0]);
$t = str_replace('&#039;','`',$t);
$m8 = trim($t);
$m8 = "8️⃣ $m8";
}else{
$m8 = "";
}
if(mb_stripos($ex92[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex92[0]);
$t = str_replace('&#039;','`',$t);
$m9 = trim($t);
$m9 = "9️⃣ $m9";
}else{
$m9 = "";
}
if(mb_stripos($ex102[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex102[0]);
$t = str_replace('&#039;','`',$t);
$m10 = trim($t);
$m10 = "🔟 $m10";
}else{
$m10 = "";
}
file_put_contents("mp3.txt","
$m1
$m2
$m3
$m4
$m5
$m6
$m7
$m8
$m9
$m10");
 bot('sendmessage',[
   'chat_id'=>$cid,
   'user_id'=>$uid,
   'message_id'=>$mid,
   'text'=>"$m1
$m2
$m3
$m4
$m5
$m6
$m7
$m8
$m9
$m10",
   'parse_mode'=>'html',
  ]);
    sleep("1");
unlink("$uid.get.txt");
   }
if($text == "/1" or $text == "/2" or $text == "/3" or $text == "/4" or $text == "/5" or $text == "/6" or $text == "/7" or $text == "/8" or $text == "/9" or $text == "/10"){
bot('editmessagetext',[
   'chat_id'=>$cid,
   'user_id'=>$uid,
   'message_id'=>$mid - 1,
   'text'=>"<b>Qayta musiqa qidirishingiz uchun: </b> <code>/musiqa qo'shiq nomi</code> <b>ni yuboring!</b>",
   'parse_mode'=>'html',
  ]);
$get = file_get_contents("$uid.txt");
if($text == "/1"){
$ex = explode("n",$get);
$a = explode(">",$ex[3]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/1 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[3]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$uid.mp3",file_get_contents($url));
}
if($text == "/2"){
$ex = explode("n",$get);
$a = explode(">",$ex[4]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/2 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[4]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$uid.mp3",file_get_contents($url));
}
if($text == "/3"){
$ex = explode("n",$get);
$a = explode(">",$ex[5]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/3 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[5]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$uid.mp3",file_get_contents($url));
}
if($text == "/4"){
$ex = explode("n",$get);
$a = explode(">",$ex[6]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/4 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[6]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$uid.mp3",file_get_contents($url));
}
if($text == "/5"){
$ex = explode("n",$get);
$a = explode(">",$ex[7]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/5 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[7]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$uid.mp3",file_get_contents($url));
}
if($text == "/6"){
$ex = explode("n",$get);
$a = explode(">",$ex[8]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/6 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[8]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$uid.mp3",file_get_contents($url));
}
if($text == "/7"){
$ex = explode("n",$get);
$a = explode(">",$ex[9]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/7 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[9]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$uid.mp3",file_get_contents($url));
}
if($text == "/8"){
$ex = explode("n",$get);
$a = explode(">",$ex[10]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/8 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[10]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$uid.mp3",file_get_contents($url));
}
if($text == "/9"){
$ex = explode("n",$get);
$a = explode(">",$ex[11]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/9 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[11]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$uid.mp3",file_get_contents($url));
}
if($text == "/10"){
$ex = explode("n",$get);
$a = explode(">",$ex[12]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/10 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[12]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$uid.mp3",file_get_contents($url));
}
$url = "https://xits.pro/download/$r";
  bot('sendmessage',[
   'chat_id'=>$cid,
   'user_id'=>$uid,
   'message_id'=>$mid,
   'text'=>"📥 Yuklanmoqda...

█▒▒▒▒▒▒▒▒▒ 0%",
   'parse_mode'=>'html',
  ]);
    sleep("1");
     $du = explode(':', $url->result->info->duration);
     $duration = ((int)$du[0] * 60) + (int)$du[1]; 
  bot('editmessagetext',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'message_id'=>$mid + 1,
    'text'=>"📥 Yuklanmoqda...

██████████ 100%",
    'parse_mode'=>'html',
  ]);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'message_id'=>$mid + 1,
  ]);
  bot('sendaudio',[
       'chat_id'=>$cid,
       'audio'=>new CURLFile($uid.'.mp3'),
       'performer'=>"@uzFunksionbot",
       'title'=>$m,
       'duration'=> $duration ,
       'caption'=>"@uzFunksionbot",
  ]);
    sleep("1");
unlink("$uid.txt");
unlink("$uid.mp3");
}


//Telegram tillari
if($text=="/til"){
  $text = "
⚜️Telegramingiz tilini osongina o'zgartirish uchun quyidagi tillardan birini tanlang👇";
  bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>$text,
    'parse_mode'=>'Markdown',
	'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🇺🇿Узбек тили",'url'=>"tg://setlanguage?lang=uzbekcyr"]],
[['text'=>"🇺🇿O'zbek tili",'url'=>"tg://setlanguage?lang=uz-beta"]],
[['text'=>"🇷🇺Руский язик",'url'=>"tg://setlanguage?lang=ru"]],
[['text'=>"🇵🇷English Languge",'url'=>"tg://setlanguage?lang=en"]],
        ]])
  ]);
}

if($text=="/idtop"){ 
$ex = explode(" ",$text);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"Siz izlagan odam 
-> [Shu yerda](tg://user?id=$ex[1]) <-",
'reply_to_message_id'=>$mid,
'parse_mode'=>'markdown',
]);
}

//Keep ga yozish
if(mb_stripos($text,"/keep")  !== false){ 
$soz = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://www.keepcalmstudio.com/-/p.php?t=%EE%BB%AA%0D%0AKEEP%0D%0ACALM%0D%0A$soz[1]%0D%0A$soz[2]%0D%0A$soz[3]&bc=000000&tc=FFFFFF&cc=FFFFFF&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"by @uzFunksionbot",
]);
}

//Love ga yozish
if(mb_stripos($text,"/love") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$cid, 
'reply_to_message_id'=>$mid,
'photo'=>"http://www.iloveheartstudio.com/-/p.php?t=$ex[1]%EE%BB%AE$ex[2]%20$ex[3]%0A$ex[4]%0D%0A%20%20&bc=000000&tc=ffffff&hc=FF0000&f=n&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"by @uzFunksionbot",
]);
}


//Logo yasash bo'limi
## QR yaratish! ##
if(mb_stripos($text,"QR") !== false){ 
$kod = str_replace("QR","",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"http://qr-code.ir/api/qr-code?s=5&e=M&t=P&d=$kod",
'caption'=>"QR CODE by @$botim
You write $kod",
]);
}
//Logo1
if(mb_stripos($text,"/logo1") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/76623182-5b19-489d-8fb7-b3e2fb712d4b/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"by @$botim",
]);
}
//Logo2
if(mb_stripos($text,"/logo2") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ef361ac4-e842-4624-a32b-b1c303f3ca4a/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"by @$botim",
]);
}
//Logo3
if(mb_stripos($text,"/logo3") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"http://www.keepcalmstudio.com/-/p.php?t=%EE%BB%AA%0D%0A%0D%0A%0D%0A$ex[1]%0D%0A$ex[2]%0D%0A$ex[3]&bc=000000&tc=99FF00&cc=FF3300&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"by @$botim",
]);
}
//Logo4
if(mb_stripos($text,"/logo4") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/dc775fad-cf82-42af-98dd-7a705c26f322/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"by @$botim",
]);
}
//Logo5
if(mb_stripos($text,"/logo5") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/628c65a9-646c-435c-b953-8943e11a71ab/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"by @$botim",
]);
}
//Logo6
if(mb_stripos($text,"/logo6") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/82711c18-4edc-42c6-a3ca-5b971ee79220/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"by @$botim",
]);
}
//Logo7
if(mb_stripos($text,"/logo7") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/1b1869b4-e487-474b-b0e3-7f3bf8194194/logo?v=4&text=$ex[1] $ex[2] $ex[3] ",
'caption'=>"by @$botim",
]);
}
if(mb_stripos($text,"/logo8") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/4b4b23e4-f3d3-42b1-9c5d-615ac62ef5ac/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @$botim
You write $ex[1]",
]);
} 
if(mb_stripos($text,"/logo9") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/08e30364-b0cf-48df-80f2-964bfe5547e4/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo10") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2aeefb25-2d78-4058-8cc7-74e2b4083e50/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo11") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/fc3c8bc5-a48c-47f0-b034-b258b3abce68/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo12") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/79ff2b19-667e-43c4-9164-332330dc6f1b/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo13") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/e33c12b4-1128-4129-b31f-2c31cb0878c7/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo14") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/d1d5e766-8cd8-424f-aa4d-fbc07908a8d2/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Best logotip by @$botim
You write $ex[1]",
]);
} 
if(mb_stripos($text,"/logo15") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/99e9e246-fca4-4fbb-a7b2-a2ff497d85b3/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Best logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo16") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/fa5b9460-2773-4c4d-a3d6-1f733bc42dba/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Best logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo17") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"http://away-dev.000webhostapp.com/api/api.php?type=356&text1=$ex[1]&text2=dhurgham ",
'caption'=>"Epic logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo18") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/bd00f834-d5f9-475a-ad48-0c6126f077c6/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo19") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/1b1869b4-e487-474b-b0e3-7f3bf8194194/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo20") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/48125ab7-a743-4f54-8da8-b2c6230e710f/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @$botim
You write $ex[1]",
]);
}

if(mb_stripos($text,"/logo21") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2a23b1f8-1793-46ee-993b-d6c83b8df0dd/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo22") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/87ea7fe8-4e10-4819-8814-60d63ce8f9b8/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo23") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/f8d2306a-8987-40a0-9de8-d448a6f2b048/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo24") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/5e47943d-4857-474d-b7ca-009652b9e52d/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo25") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/55829798-84dd-428f-871f-0a83955e2d49/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo26") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ef89e50c-2d4e-42da-a6bb-90af099b66fa/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo27") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ab03a446-9f79-4278-aebf-141d6baa5e79/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo28") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/bf0b8391-41e4-4f60-ace9-a18a114306e1/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo29") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/cddaf4c3-5ab9-4957-9da0-437cd56d7a6c/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo30") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/297c288d-4c21-4f1d-958b-e617feaef9be/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo31") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2368b276-9678-4611-8d9f-232f858ffc5a/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo32") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/95e81a44-d412-49cf-a492-bf9530c0bcf2/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo33") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ea44541f-995f-4525-89d4-17739b855a2e/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo34") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/1bfbead8-fd97-43f7-8e10-020578e6c349/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo35") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/85c09ff0-40bb-40c3-8c0c-802cc19a2297/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo36") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2a97a62b-9851-42c0-96c8-8afe40f57e0a/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo37") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/b43f1777-660c-482c-bacd-2e1642baf003/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo38") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/11a70f98-24bf-41ff-8470-b9b096af31dd/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo39") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ae3a80f0-5fd7-4fe6-bde8-a1ae017e33c1/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo40") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/f05edb5b-c016-4d31-955f-73a3e082e1c2/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo41") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/8d70e3bd-71b3-46e0-9dc8-7dfe3389e7e5/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo42") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/72b97da3-2e87-4e4b-889d-04c8711e805d/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo43") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/0b55f069-103e-459b-bd33-6dbdfc7ca811/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo44") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/93857f38-1788-47e3-9560-0220b88ac94e/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo45") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/b1c634dd-aacc-4190-986c-7ace14ed3ec6/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo46") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/e18e8c65-b2aa-49e6-8a07-ef2464ff25ae/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo47") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/e0e7aaf6-f3e6-457f-99ed-dc3487e29912/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo48") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/23eaaf26-a0f8-41f4-9ef5-468dc8b5bde3/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo49") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/45218131-8405-40a4-bb04-24d1710eff0d/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo50") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/b6d2d7ef-e4cb-44cd-9979-12068b09ec47/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo51") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/4a2ea46d-5501-48a5-9d8d-8110f9420b85/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Best logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo52") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2de6d448-afc7-425a-b51f-903fb0bc9340/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"sport logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo53") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/b54cb74a-f0c5-4071-934b-019257430e4b/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"game logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo54") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/a9a8ca01-e658-4339-917d-0010ddeaa0b6/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"game logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo55") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/163f89d3-60a5-40ac-9325-0299844d5d67/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"men logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo56") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/983dc163-be5a-406d-848e-9cc4e2b60109/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"men logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo57") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"http://away-dev.000webhostapp.com/api/api.php?type=372&text1=$ex[1]&text2=dhurgham ",
'caption'=>"girl logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo58") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/8d3db074-52eb-4888-8a35-f683ec1cef0f/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"girl logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo59") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/9988e891-579c-47f5-bfaf-959c3a2d8e25/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"girl logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo60") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/dff12af1-28d3-4645-aba0-b209b6ee8ed7/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"girl logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo61") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2085a114-720f-4f81-bfeb-778ea5ac2052/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Fest logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo62") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/1d774b95-f479-4380-a92b-51fe4c821129/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Fest logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo63") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/fbff98fe-0132-4346-aa2b-af4488ebb4fd/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Fest logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo64") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/b3236a76-dc4b-4605-a7a3-6649fb2da488/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Best logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo65") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/45c72bf1-5935-4eee-a65e-e8dd850e37b8/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"moto logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo66") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/a3defcce-fb2e-4a44-b654-4e3246141f94/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Best logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo67") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/707a772e-87ac-4225-be00-5715df731443/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo68") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/be26c778-4cbd-4a14-b8b1-4b8b1fe07952/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo69") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/4e78e518-91c8-40ea-bbc9-eba385c6d796/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo70") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/28ebcaf7-2371-43e9-8e1a-da980a834b1a/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo71") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/0a676c20-7b98-4bea-8652-dc0ad06f6c54/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo72") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/0d556a87-9ade-426a-b60a-e7575aa3edeb/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo73") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/e05bef29-964a-4a57-b6c2-128266b9c2c3/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo74") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/5223e7c6-3cc7-41b2-bb43-9ca4fc8b2d99/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo75") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/7d1a812d-9e8b-4451-a38c-d384ab1ed98e/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo76") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/127564ac-8114-43ce-9686-2f6befb8b14a/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo77") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/9bd9f7b0-971d-460b-9f35-b30091cc32f6/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo78") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/dde89710-82d1-4d2a-8752-42bebc9b9a05/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo79") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/7229c0d6-cc4f-4e47-87b2-3b01285f502d/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo80") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ad38bcc8-b76b-483c-88cb-41af5218d9ac/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo81") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/3f607d24-e269-4fd0-8ad1-34d315a51558/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo82") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/5275891b-6017-49a1-86cf-def79699e926/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo83") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/27a7162f-f00f-4d64-82aa-d77561298f14/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo84") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ce7f825f-150c-46a0-842a-7235bc0442af/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo85") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/7c8b9cd6-4636-4230-bd82-d083b414c141/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text,"/logo86") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ea509e1b-89eb-457b-810b-2f3d42cc6841/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @$botim
You write $ex[1]",
]);
}

if(mb_stripos($text,"/matn") !== false){
    $ex = explode($text," ");
	$ppp = str_replace("/matn $ex[1]","",$text);
	file_put_contents('matn/$ex[1].txt',$ppp);
bot('sendmessage',[
    'chat_id'=>$cid,
    'reply_to_message_id'=>$mid,
    'text'=>"🔐Yashirin Habar🔐

🔓Ruhsat: [Foydalanuvchiga](tg://user?id=$ex[1])",
    'parse_mode'=>'markdown',
	'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"🔎Habarni O'qish🔍",'callback_data'=>"shabar"]],
    ]
    ])
  ]);
}
if($data=="shabar"){
$shabar = file_get_contents('matn/$uid.txt');
  bot('answerCallbackQuery',[
    'callback_query_id'=>$cqid,
    'chat_id'=>$ccid, 
    'text'=>"$shabar",
   'show_alert'=>true,
   'parse_mode'=>'html',
  ]);
}

if(mb_stripos($text,"/prime") !== false){
if($cid == $admin){
	$ppp = str_replace("/prime","",$text);
file_put_contents('prime.txt',"$ppp");
bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>"<b>PRIME</b> - O'zgartirildi!
	
	$ppp",
    'parse_mode'=>'html',
  ]);
}	
}
if(mb_stripos($text,"/ovoz") !== false){ 
$ex = explode(" ",$text);
$ovoz = str_replace("/ovoz","",$text);
$vo = file_get_contents('http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&text='.urlencode($ovoz));
file_put_contents('vo.ogg',$vo);
bot('SendVoice',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'voice'=>new CURLFile('vo.ogg'),
'caption'=>"Voice by @uzFunksionbot
Voice: $ovoz",
]);
}

if(mb_stripos($text,"#nik")!== false){ 
$nn = str_replace("#nik ","",$text);
$tt = strtolower($nn);
$nik = $tt;
$nik = str_replace('a', '۰۪۫A۪۫۰', $nik);
$nik = str_replace('b', '۰۪۫B۪۫۰', $nik);
$nik = str_replace('c', '۰۪۫C۪۫۰', $nik);
$nik = str_replace('d', '۰۪۫D۪۫۰', $nik);
$nik = str_replace('e', '۰۪۫E۪۫۰', $nik);
$nik = str_replace('f', '۰۪۫F۪۫۰', $nik);
$nik = str_replace('g', '۰۪۫G۪۫۰', $nik);
$nik = str_replace('h', '۰۪۫H۪۫۰', $nik);
$nik = str_replace('i', '۰۪۫I۪۫۰', $nik);
$nik = str_replace('j', '۰۪۫J۪۫۰', $nik);
$nik = str_replace('k', '۰۪۫K۪۫۰', $nik);
$nik = str_replace('l', '۰۪۫L۪۫۰', $nik);
$nik = str_replace('m', '۰۪۫M۪۫۰', $nik);
$nik = str_replace('n', '۰۪۫N۪۫۰', $nik);
$nik = str_replace('o', '۰۪۫O۪۫۰', $nik);
$nik = str_replace('p', '۰۪۫P۪۫۰', $nik);
$nik = str_replace('q', '۰۪۫Q۪۫۰', $nik);
$nik = str_replace('r', '۰۪۫R۪۫۰', $nik);
$nik = str_replace('s', '۰۪۫S۪۫۰', $nik);
$nik = str_replace('t', '۰۪۫T۪۫۰', $nik);
$nik = str_replace('u', '۰۪۫U۪۫۰', $nik);
$nik = str_replace('v', '۰۪۫V۪۫۰', $nik);
$nik = str_replace('w', '۰۪۫W۪۫۰', $nik);
$nik = str_replace('x', '۰۪۫X۪۫۰', $nik);
$nik = str_replace('y', '۰۪۫Y۪۫۰', $nik);
$nik = str_replace('z', '۰۪۫Z۪۫۰', $nik);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik,
]); 
}

if(mb_stripos($text,"/cron")!== false){ 
$ex = explode(" ",$text);
$htt = $ex[1];
$tim = $ex[2];
file_get_contents("https://Tohirjon.000webhostapp.com/APi/cron.php?link=$htt&time=$tim");
bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>"<b>⏱Cron</b> - Bajarildi❗️
	
🔗Manzil: <b>$htt</b>
🕰Vaqt: <b>$tim</b>",
    'parse_mode'=>'html',
  ]);
}

if($text=="/crapp"){
bot('sendDocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/Hidesecret/17",
'caption'=>"💾 Ushbu Dastur Yordamida 3 ta Bepul Mutlaqo To'xtamaydigan CRON Qo'yishingiz Mumkin❗️",
]);	
}

if(mb_stripos($text,"/pol")!== false){ 
$ex = explode(" ",$text);
$savoli = $ex[1];
$javob1 = $ex[2];
$javob2 = $ex[3];
$Poll = ["$javob1","$javob2"]; 
bot('SendPoll',[
'chat_id'=>$cid,
'question'=>"$savoli",
'options'=>json_encode($Poll),
]);
}

$c_id = "@iDevelopersUz"; 
if($text == "/poll"){
$Poll = ["Yaxshi","Yomon"]; 
$m_id = bot('SendPoll',[
'chat_id'=>$c_id,
'question'=>"@uzFunksionbot ga qanday baho berardingiz?",
'options'=> json_encode($Poll)
])->result->message_id;
file_put_contents("Poll.txt","$m_id");
}
if($text1 == "/stop_pol"){
bot('stopPoll',[
'chat_id'=>$c_id,
'message_id'=>file_get_contents("Poll.txt")
]);
unlink("Poll.txt");
}

if($text == 'kitob'){
  $inpu = array("Ushbu Kitobni Albatta O'qing! Juda Qiziq!","Kitobga Gap Yo'q! O'qib Ko'ring!","Bo'sh Vaqtda Albatta O'qib Ko'ring! Qiziqib Qolasiz!","Yaxshi Kitob Ekan! Maslahat Beraman!");
  $ran=rand(0,3);
  $soz="$inpu[$ran]"; 
  $input = array("1","2","3","4");
  $rand=rand(0,3);
  $kt="$input[$rand]";
bot('sendDocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/EEEEErkamoy/$kt",
'caption'=>"$soz",
]);
}

if(mb_stripos($text,"musiqa") !==false){
  $inpu = array("Eng zo'r qo'shiqlar mana mendada!","Yangi Musiqa! Tinglang va Zavqlaning!","Qo'shiqqa Gap Yo'q Eshitib Ko'ring!","Musiqani Albatta eshitib ko'ring!");
  $ran=rand(0,3);
  $soz="$inpu[$ran]"; 
  $input = array("12","65","45","8");
  $rand=rand(0,3);
  $kt="$input[$rand]";
bot('sendaudio',[
'chat_id'=>$channel_id,
'audio'=>"https://t.me/Mp3NeeT/$kt",
'title'=>"RoBotcha Music",
'performer'=>"@uzFunksionbot",
'caption'=>"$soz",
'parse_mode'=>'markdown',
]);
}

if(mb_stripos($text,"bass") !==false){
  $input = array("12","65","45","8");
  $rand=rand(0,3);
  $kt="$input[$rand]";
bot('sendaudio',[
'chat_id'=>$channel_id,
'audio'=>"https://t.me/Mp3NeeT/$kt",
'title'=>"RoBotcha Music",
'performer'=>"@uzFunksionbot",
'caption'=>"BASS Music - @uzFunksionbot",
'parse_mode'=>'markdown',
]);
}

if($text == '/file' and $cid == $admin){
bot('sendDocument',[
'chat_id'=>$cid,
'document'=>new CURLFile(__FILE__),
]);
}


 

?>