<?php

namespace Database\Seeders;

use App\Models\Memo;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        if (!$user) {
            $this->command->warn('ユーザーが存在しません。先にユーザーを作成してください。');
            return;
        }

        Memo::create([
            'user_id' => $user->id,
            'title' => 'PHP',
            'body' => 'PHPは、Hypertext Preprocessorの略です。',
        ]);

        Memo::create([
            'user_id' => $user->id,
            'title' => 'HTML',
            'body' => 'HTMLは、Hypertext Markup Languageの略です。',
        ]);

        Memo::create([
            'user_id' => $user->id,
            'title' => 'CSS',
            'body' => 'CSSは、' . PHP_EOL . 'Cascading Style Sheets' . PHP_EOL . 'の略です。',
        ]);

        Memo::create([
            'user_id' => $user->id,
            'title' => '混在',
            'body' => 'Test123 てすとアイウエオｱｲｳｴｵ' . PHP_EOL . '漢字！ＡＢＣ ａｂｃ １２３   😊✨',
        ]);
    }
}
