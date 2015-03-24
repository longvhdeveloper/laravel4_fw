<?php
class DemoComposer
{
    public function compose($view)
    {
        $view->with('demo123', 'Demo data 123 call');
    }
}
