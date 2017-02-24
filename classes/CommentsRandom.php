<?php
/**
 * Created by PhpStorm.
 * User: Marko Cupic m.cupic@gmx.ch
 * Date: 23.02.2017
 * Time: 21:34
 */

namespace CommentsRandom;


class CommentsRandom
{
    /**
     * Randomize listing order of comments in the Frontend
     * @param $objTemplate
     */
    public function parseTemplate($objTemplate)
    {
        if (TL_MODE == 'FE')
        {
            if ($objTemplate->com_order == 'random')
            {
                if (isset($objTemplate->comments))
                {
                    if(!empty($objTemplate->comments))
                    {
                        if (is_array($objTemplate->comments))
                        {
                            $arrComments = $objTemplate->comments;
                            if (shuffle($arrComments))
                            {
                                $objTemplate->comments = $arrComments;
                            }
                        }
                    }
                }
            }
        }
    }
}

