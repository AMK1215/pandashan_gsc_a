<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class GSCReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->insert([
            [
                'member_name' => 'P111111',
                'wager_id' => '240913061721551',
                'product_code' => 1006,
                'game_type_id' => 2,
                'game_name' => 'TestGame',
                'game_round_id' => '240913061721551',
                'bet_amount' => 1000,  // 10.0 converted to cents
                'valid_bet_amount' => 1000,
                'payout_amount' => 1000,
                'commission_amount' => 0,
                'jack_pot_amount' => 0,
                'jp_bet' => 0,
                'status' => 101,
                'created_on' => Carbon::parse('2024-09-13T06:17:21'),
                'settlement_date' => Carbon::parse('2024-09-13T06:17:21'),
                'modified_on' => Carbon::parse('2024-09-13T06:17:21'),
                'agent_id' => 1,
                'agent_commission' => 0.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'member_name' => 'P222222',
                'wager_id' => '240913061721552',
                'product_code' => 1007,
                'game_type_id' => 2,
                'game_name' => 'MegaGame',
                'game_round_id' => '240913061721552',
                'bet_amount' => 1500,
                'valid_bet_amount' => 1500,
                'payout_amount' => 2000,
                'commission_amount' => 50,
                'jack_pot_amount' => 100,
                'jp_bet' => 200,
                'status' => 102,
                'created_on' => Carbon::parse('2024-09-14T07:22:21'),
                'settlement_date' => Carbon::parse('2024-09-14T07:22:21'),
                'modified_on' => Carbon::parse('2024-09-14T07:22:21'),
                'agent_id' => 1,
                'agent_commission' => 150.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'member_name' => 'P333333',
                'wager_id' => '240913061721553',
                'product_code' => 1008,
                'game_type_id' => 1,
                'game_name' => 'AdventureSlots',
                'game_round_id' => '240913061721553',
                'bet_amount' => 500,
                'valid_bet_amount' => 500,
                'payout_amount' => 0,
                'commission_amount' => 0,
                'jack_pot_amount' => 0,
                'jp_bet' => 0,
                'status' => 103,
                'created_on' => Carbon::parse('2024-09-15T08:30:21'),
                'settlement_date' => Carbon::parse('2024-09-15T08:30:21'),
                'modified_on' => Carbon::parse('2024-09-15T08:30:21'),
                'agent_id' => 1,
                'agent_commission' => 50.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'member_name' => 'P444444',
                'wager_id' => '240913061721554',
                'product_code' => 1009,
                'game_type_id' => 1,
                'game_name' => 'MysteryQuest',
                'game_round_id' => '240913061721554',
                'bet_amount' => 2000,
                'valid_bet_amount' => 2000,
                'payout_amount' => 1500,
                'commission_amount' => 100,
                'jack_pot_amount' => 500,
                'jp_bet' => 300,
                'status' => 104,
                'created_on' => Carbon::parse('2024-09-16T09:45:21'),
                'settlement_date' => Carbon::parse('2024-09-16T09:45:21'),
                'modified_on' => Carbon::parse('2024-09-16T09:45:21'),
                'agent_id' => 1,
                'agent_commission' => 200.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'member_name' => 'P555555',
                'wager_id' => '240913061721555',
                'product_code' => 1010,
                'game_type_id' => 1,
                'game_name' => 'TreasureHunt',
                'game_round_id' => '240913061721555',
                'bet_amount' => 3000,
                'valid_bet_amount' => 3000,
                'payout_amount' => 2500,
                'commission_amount' => 0,
                'jack_pot_amount' => 1000,
                'jp_bet' => 500,
                'status' => 105,
                'created_on' => Carbon::parse('2024-09-17T10:50:21'),
                'settlement_date' => Carbon::parse('2024-09-17T10:50:21'),
                'modified_on' => Carbon::parse('2024-09-17T10:50:21'),
                'agent_id' => 1,
                'agent_commission' => 300.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'member_name' => 'P666666',
                'wager_id' => '240913061721556',
                'product_code' => 1011,
                'game_type_id' => 1,
                'game_name' => 'SpaceWars',
                'game_round_id' => '240913061721556',
                'bet_amount' => 4000,
                'valid_bet_amount' => 4000,
                'payout_amount' => 3500,
                'commission_amount' => 100,
                'jack_pot_amount' => 0,
                'jp_bet' => 0,
                'status' => 106,
                'created_on' => Carbon::parse('2024-09-18T11:55:21'),
                'settlement_date' => Carbon::parse('2024-09-18T11:55:21'),
                'modified_on' => Carbon::parse('2024-09-18T11:55:21'),
                'agent_id' => 1,
                'agent_commission' => 400.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'member_name' => 'P777777',
                'wager_id' => '240913061721557',
                'product_code' => 1012,
                'game_type_id' => 1,
                'game_name' => 'JungleRun',
                'game_round_id' => '240913061721557',
                'bet_amount' => 5000,
                'valid_bet_amount' => 5000,
                'payout_amount' => 4500,
                'commission_amount' => 200,
                'jack_pot_amount' => 0,
                'jp_bet' => 0,
                'status' => 107,
                'created_on' => Carbon::parse('2024-09-19T12:10:21'),
                'settlement_date' => Carbon::parse('2024-09-19T12:10:21'),
                'modified_on' => Carbon::parse('2024-09-19T12:10:21'),
                'agent_id' => 1,
                'agent_commission' => 500.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'member_name' => 'P888888',
                'wager_id' => '240913061721558',
                'product_code' => 1013,
                'game_type_id' => 1,
                'game_name' => 'DragonQuest',
                'game_round_id' => '240913061721558',
                'bet_amount' => 6000,
                'valid_bet_amount' => 6000,
                'payout_amount' => 5000,
                'commission_amount' => 300,
                'jack_pot_amount' => 0,
                'jp_bet' => 0,
                'status' => 108,
                'created_on' => Carbon::parse('2024-09-20T13:20:21'),
                'settlement_date' => Carbon::parse('2024-09-20T13:20:21'),
                'modified_on' => Carbon::parse('2024-09-20T13:20:21'),
                'agent_id' => 1,
                'agent_commission' => 600.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'member_name' => 'P999999',
                'wager_id' => '240913061721559',
                'product_code' => 1014,
                'game_type_id' => 1,
                'game_name' => 'PirateGold',
                'game_round_id' => '240913061721559',
                'bet_amount' => 7000,
                'valid_bet_amount' => 7000,
                'payout_amount' => 6000,
                'commission_amount' => 400,
                'jack_pot_amount' => 0,
                'jp_bet' => 0,
                'status' => 109,
                'created_on' => Carbon::parse('2024-09-21T14:25:21'),
                'settlement_date' => Carbon::parse('2024-09-21T14:25:21'),
                'modified_on' => Carbon::parse('2024-09-21T14:25:21'),
                'agent_id' => 1,
                'agent_commission' => 700.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'member_name' => 'P101010',
                'wager_id' => '240913061721560',
                'product_code' => 1015,
                'game_type_id' => 11,
                'game_name' => 'GoldRush',
                'game_round_id' => '240913061721560',
                'bet_amount' => 8000,
                'valid_bet_amount' => 8000,
                'payout_amount' => 7500,
                'commission_amount' => 500,
                'jack_pot_amount' => 0,
                'jp_bet' => 0,
                'status' => 110,
                'created_on' => Carbon::parse('2024-09-22T15:30:21'),
                'settlement_date' => Carbon::parse('2024-09-22T15:30:21'),
                'modified_on' => Carbon::parse('2024-09-22T15:30:21'),
                'agent_id' => 1,
                'agent_commission' => 800.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }


}