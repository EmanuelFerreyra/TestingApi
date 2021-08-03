<?php

namespace testapi\connection;

interface RepositoryConnection{

    public function on();
    public function close();
}