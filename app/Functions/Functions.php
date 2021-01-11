<?php

namespace App\Functions;

use Mail;

class Functions {


    public static function setEmailTemplate($contentModel, $replaces) {
        $data['body'] = $contentModel[0]->body;
        $data['subject'] = $contentModel[0]->subject;
        $data['title'] = $contentModel[0]->title;
        foreach ($replaces as $key => $replace) {
            $data['body'] = str_replace("%%" . $key . "%%", $replace, $data['body']);
        }

        return $data;
    }

    public static function sendEmail($email, $subject, $body, $header = '', $cc = "", $bcc = "") {


        $data['to'] = $email;
        $data['body'] = $body;
        $data['subject'] = $subject;


        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <' . env('MAIL_FROM_ADDRESS') . '>' . "\r\n";
        // $headers .= 'Cc: myboss@example.com' . "\r\n";
        //return mail($email, $subject, $body, $headers);


        return Mail::send('emails.template', $data, function($message) use ($data) {
            $message->to($data['to'])->subject($data['subject']);
        });
    }

}
