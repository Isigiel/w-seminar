<?php
class GroupsSeeder extends Seeder {

    public function run()
    {
        DB::table('groups')->delete();
        
        $group = Sentry::createGroup(array(
        'name'        => 'Modders',
        'permissions' => array(
            'mod.edit' => 1,
            'mod.download' => 1,

        ),
    ));
    }
}