<?php

require_once('User.php');
require_once('UserService.php');

$users = [
    new User('DJak', 'testTTtest226', new DateTime('05.10.2003')),
    new User('Valya', 'ValyaTop1477', new DateTime('11.11.2005')),
    new User('Alexandr', 'Alexsander344', new DateTime('16.12.2009')),
    new User('Alex', 'AzerTop232', new DateTime('23.02.1995')),
    new User('Alesker', 'GHtthtr34', new DateTime('12.06.2010')),
    new User('Jenya', '123QWERTYuiop', new DateTime('20.12.1978'))
];

$sortedUsername = UserService::sortByUsername($users, 'desc');

UserService::displayUsers($sortedUsername);