<?php



trait thinkable {
    function think() {
        print '私は' . $this->hobby . 'について考えています。';
    }
}