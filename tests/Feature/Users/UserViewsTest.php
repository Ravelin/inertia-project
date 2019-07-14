<?php

namespace Tests\Feature\Users;

use Tests\TestCase;

class UserViewsTest extends TestCase {

    public function testUserCreateForm() {
        $response = $this->get('/users/create');
        $response->assertSee('create');
    }
}
