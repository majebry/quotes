<?php

use App\Quote;
use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quote::create([
            'id' => 1,
            'quote' => 'The present moment is as it is.',
            'created_at' => '2019-11-14 13:40:23',
            'updated_at' => '2019-11-18 11:18:13',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3, 5]);

        Quote::create([
            'id' => 2,
            'quote' => 'By watching the mechanics of the mind, you step out of its resistance patterns.',
            'created_at' => '2019-11-14 13:43:20',
            'updated_at' => '2019-11-18 11:33:23',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([7, 4]);

        Quote::create([
            'id' => 3,
            'quote' => 'Whatever the present moment contains accept it as you have chosen it.',
            'created_at' => '2019-11-14 14:06:27',
            'updated_at' => '2019-11-18 11:32:43',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([5]);

        Quote::create([
            'id' => 4,
            'quote' => 'Always work with the present moment not against it. Make it your friend, not an enemy!',
            'created_at' => '2019-11-14 14:07:15',
            'updated_at' => '2019-12-05 10:27:16',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([7, 4, 3]);

        Quote::create([
            'id' => 6,
            'quote' => 'Even a thought or an innocent remark made by someone close to you can activate it (the pain-body).',
            'created_at' => '2019-11-14 14:36:17',
            'updated_at' => '2019-11-18 12:19:37',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([1, 2, 8]);

        Quote::create([
            'id' => 7,
            'quote' => 'Watch out for any sign of unhappiness within yourself in whatever form, it may be the awakening pain-body.',
            'created_at' => '2019-11-14 14:45:36',
            'updated_at' => '2019-11-18 11:13:52',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([2, 4]);

        Quote::create([
            'id' => 8,
            'quote' => 'Catch it (the pain-body) the moment it awakens from its dormant state.',
            'created_at' => '2019-11-14 14:49:15',
            'updated_at' => '2019-11-18 12:20:08',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([2, 4]);

        Quote::create([
            'id' => 9,
            'quote' => 'The pain-body wants to survive just like any other entity, and it can only survive if it gets you to unconsciously identify with it',
            'created_at' => '2019-11-14 14:51:32',
            'updated_at' => '2019-11-18 11:42:41',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([2, 1]);

        Quote::create([
            'id' => 10,
            'quote' => 'Pain can only feed on pain.',
            'created_at' => '2019-11-14 14:58:46',
            'updated_at' => '2019-11-18 11:32:13',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([2]);

        Quote::create([
            'id' => 11,
            'quote' => 'Whatever is, could not be otherwise.',
            'created_at' => '2019-11-14 19:25:32',
            'updated_at' => '2019-11-18 11:41:59',
            'author' => 'Eckhart Tolle',
            'source' => null,
        ])->tags()->attach([5]);

        Quote::create([
            'id' => 12,
            'quote' => 'Resistance is the glue that holds our problems together.',
            'created_at' => '2019-11-17 07:28:52',
            'updated_at' => '2019-11-18 11:30:33',
            'author' => 'Hale Dwoskin',
            'source' => 'Sedona Method',
        ])->tags()->attach([7]);

        Quote::create([
            'id' => 13,
            'quote' => 'Realize deeply that the present moment is all you ever have.',
            'created_at' => '2019-11-17 11:20:17',
            'updated_at' => '2019-11-18 11:30:59',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3]);

        Quote::create([
            'id' => 14,
            'quote' => 'It\'s not what the mind says, It\'s how seriously it\'s taken.',
            'created_at' => '2019-11-18 09:52:15',
            'updated_at' => '2019-11-18 11:08:15',
            'author' => 'Mooji',
            'source' => null,
        ])->tags()->attach([1]);

        Quote::create([
            'id' => 19,
            'quote' => 'This continues setting in judgment, creates pain and unhappiness.',
            'created_at' => '2019-11-18 11:30:04',
            'updated_at' => '2019-11-18 11:30:04',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([2, 1]);

        Quote::create([
            'id' => 20,
            'quote' => 'Sustained conscious attention severs the link between the pain-body and your thought processes.',
            'created_at' => '2019-11-19 10:34:21',
            'updated_at' => '2019-11-19 10:39:55',
            'author' => 'Eckhart Tolle',
            'source' => null,
        ])->tags()->attach([2, 4]);

        Quote::create([
            'id' => 21,
            'quote' => 'I can allow and feel the unhappiness here, it\'s no longer using my mind and making me think unhappy thoughts. I\'m aware.',
            'created_at' => '2019-11-20 13:17:05',
            'updated_at' => '2019-11-20 13:17:05',
            'author' => 'Eckhart Tolle',
            'source' => null,
        ])->tags()->attach([2, 5]);

        Quote::create([
            'id' => 22,
            'quote' => 'You can use a challenge to awaken you, or you can allow it to pull you into even deeper sleep.',
            'created_at' => '2019-11-21 14:00:59',
            'updated_at' => '2019-11-21 14:00:59',
            'author' => 'Eckhart Tolle',
            'source' => null,
        ])->tags()->attach([4]);

        Quote::create([
            'id' => 23,
            'quote' => 'When you listen to that voice, do not judge or condemn what you hear.',
            'created_at' => '2019-11-24 12:28:26',
            'updated_at' => '2019-11-24 12:28:26',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3, 4, 6, 1]);

        Quote::create([
            'id' => 24,
            'quote' => 'it (pain-body) has a certain momentum, just like a spinning wheel that will keep turning for a while even when it is no longer being propelled.',
            'created_at' => '2019-12-02 14:14:56',
            'updated_at' => '2019-12-02 14:14:56',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([2]);

        Quote::create([
            'id' => 25,
            'quote' => 'Stay present, stay conscious. Be the ever-alert guardian of your inner space.',
            'created_at' => '2019-12-02 14:16:12',
            'updated_at' => '2019-12-02 14:16:12',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3, 4]);

        Quote::create([
            'id' => 26,
            'quote' => 'You need to be present enough to be able to watch the pain-body directly and feel its energy.',
            'created_at' => '2019-12-02 14:16:59',
            'updated_at' => '2019-12-02 14:16:59',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([2, 3]);

        Quote::create([
            'id' => 27,
            'quote' => 'The moment your thinking is aligned with the energy field of the pain-body, you are identified with it and feeding it with your thoughts.',
            'created_at' => '2019-12-02 14:21:06',
            'updated_at' => '2019-12-02 14:21:06',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([2, 1]);

        Quote::create([
            'id' => 28,
            'quote' => '"Unconscious" means to be identified with some mental or emotional pattern. It implies a complete absence of the watcher.',
            'created_at' => '2019-12-02 14:34:42',
            'updated_at' => '2019-12-02 14:34:42',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([1]);

        Quote::create([
            'id' => 30,
            'quote' => 'Focus attention on the feeling inside you. Know that it is the pain-body. Accept that it is there. Don\'t think about it - don\'t let the feeling turn into thinking. Don\'t judge or analyze. Don\'t make an identity for yourself out of it. Stay present, and continue to be the observer of what is happening inside you.',
            'created_at' => '2019-12-02 14:37:47',
            'updated_at' => '2019-12-02 14:37:47',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([2]);

        Quote::create([
            'id' => 31,
            'quote' => 'take your attention into the pain-body, stay present as the witness, and so initiate its transmutation.',
            'created_at' => '2019-12-05 07:17:44',
            'updated_at' => '2019-12-05 07:17:44',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([2]);

        Quote::create([
            'id' => 32,
            'quote' => 'Only you can do this. Nobody can do it for you.',
            'created_at' => '2019-12-05 07:18:07',
            'updated_at' => '2019-12-05 07:18:07',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([2]);

        Quote::create([
            'id' => 33,
            'quote' => 'if you are identified with your mind and have lost touch with the simplicity of the Now, that anxiety gap will be your constant companion.',
            'created_at' => '2019-12-05 07:24:14',
            'updated_at' => '2019-12-05 07:24:14',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3, 1]);

        Quote::create([
            'id' => 34,
            'quote' => 'as long as you are identified with your mind, the ego runs your life',
            'created_at' => '2019-12-05 07:25:11',
            'updated_at' => '2019-12-05 07:25:11',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([6, 1]);

        Quote::create([
            'id' => 35,
            'quote' => 'Watch out for any kind of defensiveness within yourself. What are you defending? An illusory identity, an image in your mind, a fictitious entity.',
            'created_at' => '2019-12-05 07:26:40',
            'updated_at' => '2019-12-05 07:26:40',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([6]);

        Quote::create([
            'id' => 36,
            'quote' => 'anyone who is identified with their mind will have fear as their constant companion',
            'created_at' => '2019-12-05 07:28:04',
            'updated_at' => '2019-12-05 08:06:43',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([1]);

        Quote::create([
            'id' => 37,
            'quote' => 'As long as the egoic mind is running your life, you cannot truly be at ease',
            'created_at' => '2019-12-05 07:29:11',
            'updated_at' => '2019-12-05 07:29:11',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([1]);

        Quote::create([
            'id' => 38,
            'quote' => 'The problems of the mind cannot be solved on the level of the mind.',
            'created_at' => '2019-12-05 07:29:44',
            'updated_at' => '2019-12-05 07:29:44',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([1]);

        Quote::create([
            'id' => 39,
            'quote' => 'There can be a great deal of unconscious ego investment in pain and suffering.',
            'created_at' => '2019-12-05 07:30:10',
            'updated_at' => '2019-12-05 07:30:10',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([6, 2]);

        Quote::create([
            'id' => 40,
            'quote' => 'Remove time from the mind and it stops',
            'created_at' => '2019-12-05 07:30:34',
            'updated_at' => '2019-12-05 07:30:34',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3, 1]);

        Quote::create([
            'id' => 41,
            'quote' => 'To be identified with your mind is to be trapped in time',
            'created_at' => '2019-12-05 07:30:50',
            'updated_at' => '2019-12-05 07:30:50',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3, 1]);

        Quote::create([
            'id' => 42,
            'quote' => 'My mind cannot know you, only labels, judgments, facts, and opinions about you.',
            'created_at' => '2019-12-05 07:31:26',
            'updated_at' => '2019-12-05 07:31:26',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([8]);

        Quote::create([
            'id' => 43,
            'quote' => 'when (the mind) takes over all aspects of your life, including your relationships, it becomes a monstrous parasite that if unchecked, may well end up killing all life on the planet and finally itself by killing its host.',
            'created_at' => '2019-12-05 07:33:13',
            'updated_at' => '2019-12-05 07:33:13',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([8, 1]);

        Quote::create([
            'id' => 44,
            'quote' => 'Break the old pattern of present-moment denial and present-moment resistance.',
            'created_at' => '2019-12-05 07:44:49',
            'updated_at' => '2019-12-05 08:50:28',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([7, 5, 3]);

        Quote::create([
            'id' => 45,
            'quote' => 'Make it your practice to withdraw attention from past and future whenever they are not needed.',
            'created_at' => '2019-12-05 07:46:53',
            'updated_at' => '2019-12-05 07:46:53',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3]);

        Quote::create([
            'id' => 46,
            'quote' => 'Step out of the time dimension as much as possible in everyday life.',
            'created_at' => '2019-12-05 07:47:22',
            'updated_at' => '2019-12-05 07:47:22',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3]);

        Quote::create([
            'id' => 47,
            'quote' => 'start by observing the habitual tendency of your mind to want to escape from the Now.',
            'created_at' => '2019-12-05 07:47:41',
            'updated_at' => '2019-12-05 07:47:41',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3, 4]);

        Quote::create([
            'id' => 48,
            'quote' => 'Through self-observation, more presence comes into your life automatically.',
            'created_at' => '2019-12-05 07:48:02',
            'updated_at' => '2019-12-05 07:48:02',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3, 4]);

        Quote::create([
            'id' => 49,
            'quote' => 'The moment you realize you are not present, you are present.',
            'created_at' => '2019-12-05 07:48:26',
            'updated_at' => '2019-12-05 07:48:26',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3]);

        Quote::create([
            'id' => 50,
            'quote' => 'Whenever you are able to observe your mind, you are no longer trapped in it.',
            'created_at' => '2019-12-05 07:48:47',
            'updated_at' => '2019-12-05 07:48:47',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([4]);

        Quote::create([
            'id' => 51,
            'quote' => 'Be present as the watcher of your mind - of your thoughts and emotions as well as your reactions in various situations.',
            'created_at' => '2019-12-05 07:49:17',
            'updated_at' => '2019-12-05 07:49:17',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3]);

        Quote::create([
            'id' => 52,
            'quote' => 'Be at least as interested in your reactions as in the situation or person that causes you to react.',
            'created_at' => '2019-12-05 07:49:45',
            'updated_at' => '2019-12-05 07:49:45',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([8]);

        Quote::create([
            'id' => 53,
            'quote' => 'Notice also how often your attention is in the past or future.',
            'created_at' => '2019-12-05 07:50:06',
            'updated_at' => '2019-12-05 07:50:06',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3]);

        Quote::create([
            'id' => 54,
            'quote' => 'Don\'t judge or analyze what you observe.',
            'created_at' => '2019-12-05 07:54:40',
            'updated_at' => '2019-12-05 07:54:40',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([4]);

        Quote::create([
            'id' => 55,
            'quote' => 'Watch the thought, feel the emotion, observe the reaction. Don\'t make a personal problem out of them.',
            'created_at' => '2019-12-05 07:55:28',
            'updated_at' => '2019-12-05 07:55:28',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([4]);

        Quote::create([
            'id' => 56,
            'quote' => 'Intense presence is needed when certain situations trigger a reaction with a strong emotional charge',
            'created_at' => '2019-12-05 07:56:05',
            'updated_at' => '2019-12-05 07:56:05',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3, 4]);

        Quote::create([
            'id' => 57,
            'quote' => 'Identification with the mind gives it more energy; observation of the mind withdraws energy from it.',
            'created_at' => '2019-12-05 08:04:11',
            'updated_at' => '2019-12-05 08:04:11',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([1]);

        Quote::create([
            'id' => 58,
            'quote' => 'Identification with the mind creates more time; observation of the mind opens up the dimension of the timeless.',
            'created_at' => '2019-12-05 08:04:32',
            'updated_at' => '2019-12-05 08:04:32',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([1, 3]);

        Quote::create([
            'id' => 59,
            'quote' => 'Are you always trying to get somewhere other than where you are?',
            'created_at' => '2019-12-05 09:35:40',
            'updated_at' => '2019-12-05 09:35:40',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([7]);

        Quote::create([
            'id' => 60,
            'quote' => 'Is most of your doing just a means to an end?',
            'created_at' => '2019-12-05 09:36:14',
            'updated_at' => '2019-12-05 09:36:14',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([7]);

        Quote::create([
            'id' => 61,
            'quote' => 'If your mind carries a heavy burden of past, you will experience more of the same.',
            'created_at' => '2019-12-19 09:43:39',
            'updated_at' => '2019-12-19 09:43:39',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([1]);

        Quote::create([
            'id' => 62,
            'quote' => 'The past perpetuates itself through lack of presence.',
            'created_at' => '2019-12-19 09:44:19',
            'updated_at' => '2019-12-19 09:44:19',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3]);

        Quote::create([
            'id' => 63,
            'quote' => 'The quality of your consciousness at this moment is what shapes the future',
            'created_at' => '2019-12-19 09:45:05',
            'updated_at' => '2019-12-19 09:45:05',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3, 4]);

        Quote::create([
            'id' => 65,
            'quote' => 'what is it that determines the quality of your consciousness? Your degree of presence',
            'created_at' => '2019-12-19 09:46:39',
            'updated_at' => '2019-12-19 09:46:39',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3, 4]);

        Quote::create([
            'id' => 66,
            'quote' => 'So the only place where true change can occur and where the past can be dissolved is the Now',
            'created_at' => '2019-12-19 09:47:04',
            'updated_at' => '2019-12-19 09:47:04',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3]);

        Quote::create([
            'id' => 67,
            'quote' => 'Unease, anxiety, tension, stress, worry - all forms of fear - are caused by too much future',
            'created_at' => '2019-12-19 09:57:41',
            'updated_at' => '2019-12-19 09:57:41',
            'author' => 'Eckhart Tolle',
            'source' => null,
        ])->tags()->attach([3, 2]);

        Quote::create([
            'id' => 68,
            'quote' => 'Guilt, regret, resentment, grievances, sadness, bitterness, and all forms of non-forgiveness are caused by too much past',
            'created_at' => '2019-12-19 09:58:08',
            'updated_at' => '2019-12-19 09:58:08',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3, 2]);

        Quote::create([
            'id' => 69,
            'quote' => 'until you have dealt with the basic problem-making dysfunction of the mind - its attachment to past and future and denial of the Now - problems are actually interchangeable.',
            'created_at' => '2019-12-19 10:35:24',
            'updated_at' => '2019-12-19 10:35:24',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([1]);

        Quote::create([
            'id' => 70,
            'quote' => 'Ultimately, there is only one problem: the time bound mind itself.',
            'created_at' => '2019-12-19 10:37:52',
            'updated_at' => '2019-12-19 10:37:52',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3]);

        Quote::create([
            'id' => 71,
            'quote' => 'There is no salvation in time. You cannot be free in the future. Presence is the key to freedom',
            'created_at' => '2019-12-19 10:39:56',
            'updated_at' => '2019-12-19 10:39:56',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([3]);

        Quote::create([
            'id' => 72,
            'quote' => '"Problem" means that you are dwelling on a situation mentally without there being a true intention or possibility of taking action now and that you are unconsciously making it part of your sense of self.',
            'created_at' => '2019-12-22 15:12:12',
            'updated_at' => '2019-12-22 15:12:12',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([1]);

        Quote::create([
            'id' => 73,
            'quote' => 'All it takes is a simple decision: no matter what happens, I will create no more pain for myself. I will create no more problems.',
            'created_at' => '2019-12-22 15:15:57',
            'updated_at' => '2019-12-22 15:15:57',
            'author' => 'Eckhart Tolle',
            'source' => 'The Power of Now',
        ])->tags()->attach([2]);
    }
}
