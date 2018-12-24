<?php

namespace Scheb\Tombstone\Analyzer\Test\Fixtures\App;

class SampleClass
{
    public function deadCodeMethod()
    {
        if (false) {
            // This should be detected as dead
            tombstone('2015-01-01', 'author', 'deadCodeMethod_if');
        }

        // These should be detected as vampires
        tombstone('2015-01-01', 'author', 'deadCodeMethod');
        tombstone('2015-01-01', 'author');
    }
}