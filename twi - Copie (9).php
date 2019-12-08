     array_push($mms_imgs, getenv('BASE_URL') . '/' . $target_file);
            }
        }
    }


    $sid = getenv('TWILIO_ACCOUNT_SID'); // 'l7wa'; 
    $token = getenv('TWILIO_AUTH_TOKEN');   // 'l7wa'; 

    $twilio = new Client($sid, $token);
