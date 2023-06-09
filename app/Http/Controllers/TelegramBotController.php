<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramBotController extends Controller
{
    public function webhook(Request $request)
    {
        $updates = Telegram::getWebhookUpdates();

        // Kelgan so'rovni qabul qiling
        // Bu yerdagi kodni o'zgartirish va botning funksiyalarini yozing

        return 'ok';
    }
}
