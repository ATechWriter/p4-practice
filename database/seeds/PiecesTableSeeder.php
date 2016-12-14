<?php

use Illuminate\Database\Seeder;
use App\Composer;

class PiecesTableSeeder extends Seeder
{
    /**
     * Add three entries to the pieces table; requires composers table foreign key
     *
     * @return void
     */
    public function run()
    {
        $composer_id = Composer::where('last_name','=','Monteverdi')->pluck('id')->first();

        DB::table('pieces')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'title' => 'Dispiegate Guance amate',
            'composer_id' => $composer_id,
            'publication_date' => '1607',
            'manuscript' => 'Scherzi musicali a tre voce',
            'link' => 'http://imslp.org/wiki/Scherzi_musicali,_SV_246-251_(Monteverdi,_Claudio)',
            'lyrics' => "Dispiegate Guance amate<br/>
            Quella porpora acerbetta<br/>
            Che perdenti Che dolenti<br/>
            Fian le rose in su l'herbetta<br/>
            Plus six more verses",
            'translation' => 'Sadly, I am not fluent in Italian. More research required.',
            'comments' => 'Starts on folio 33. Includes verse and ritornello.'
        ]);

        $composer_id = Composer::where('last_name','=','Jones')->pluck('id')->first();

        DB::table('pieces')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'title' => 'Once did I serve a cruell hart',
            'composer_id' => $composer_id,
            'publication_date' => '1609',
            'manuscript' => 'Once did I serve a cruell hart',
            'link' => 'http://imslp.org/wiki/A_Musicall_Dreame_(Jones,_Robert)',
            'lyrics' => "Once did I serve a cruell hart with faith unfainde<br/>
            I still importune her piersing lookes that wrought my smart<br/>
            she laughes and smiles at my misfortune<br/>
            and says perhaps you may at last by true desart<br/>
            loves sauour taste.",
            'translation' => '',
            'comments' => 'Piece #3 in MS. First page is cantus plus lute entab.
            Second page is bassus (rotated and untexted) and altus.'
        ]);

        $composer_id = Composer::where('last_name','=','Sweelinck')->pluck('id')->first();

        DB::table('pieces')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'title' => 'Voicy du gay Printemps',
            'composer_id' => $composer_id,
            'publication_date' => '1612',
            'manuscript' => 'Rimes francoises et italiennes',
            'link' => '',
            'lyrics' => "Voicy du gay Printemps l'heureux advenement,<br/>
            qui faict que l'Hyver morne a regret se retire.<br/>
            Desja la petite herbe au gre du doux Zephyre navre<br/>
            de son amour branle tout doucement.<br/>
            Les forests ont repris leur verd accoustrement,<br/>
            le ciel rit, l'air est chaud, le vent mollet souspire,<br/>
            le Rossignol se plaint, et des accords qu'il tire,<br/>
            Fait languir les esprits d'un doux ravissement.
            And also le seconde partie",
            'translation' => 'Here comes lovely Spring, the happy season,<br/>
            that makes Winter mourn with regret that he withdraws.<br/>
            Already the little sprouts at the discretion of sweet Zephyrus broken<br/>
            with the very gentle agitation of his love.<br/>
            The forests have retaken their green raiment,<br/>
            the sky laughs, the air is warm, the wind sighs softly,<br/>
            It makes our spirits languish with a sweet ravishing.<br/>
            More to come...',
            'comments' => 'Starts on folio 33. Includes verse and ritornello.'
        ]);

    }
}
