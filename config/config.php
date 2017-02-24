<?php
/**
 * Created by PhpStorm.
 * User: Marko Cupic m.cupic@gmx.ch
 * Date: 23.02.2017
 * Time: 21:34
 */
if (TL_MODE == 'FE')
{
    // Randomize order when listing comments in the Frontend
    $GLOBALS['TL_HOOKS']['parseTemplate'][] = array('CommentsRandom\CommentsRandom', 'parseTemplate');
}

