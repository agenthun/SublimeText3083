<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */
/**
 * Space in Paren: Add padding spaces within paren, ie. f( a, b )
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.0 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_0.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   PHP
 * @package    PHP_Beautifier
 * @subpackage Filter
 * @author     Davide Pedone <davide.pedone@gmail.com>
 * @copyright  2014 Davide Pedone
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 *
 */

class PHP_Beautifier_Filter_SpaceInParen extends PHP_Beautifier_Filter
{
    /**
     * t_parenthesis_open
     *
     * @param mixed $sTag The tag to be procesed
     *
     * @access public
     * @return void
     */
    public function t_parenthesis_open( $sTag )
    {
        if ( $this->oBeaut->getControlParenthesis() != T_ARRAY && $this->oBeaut->getNextTokenContent() != ')' ) {
            $this->oBeaut->removeWhitespace();
            $this->oBeaut->add( $sTag . ' ' );

        }else{

            return BYPASS;

        }

    }
    /**
     * t_parenthesis_close
     *
     * @param mixed $sTag The tag to be procesed
     *
     * @access public
     * @return void
     */
    public function t_parenthesis_close( $sTag )
    {
        if ( $this->oBeaut->getControlParenthesis() != T_ARRAY && $this->oBeaut->getPreviousTokenContent() != '(' ) {
            $this->oBeaut->removeWhitespace();
            $this->oBeaut->add( ' ' . $sTag );

        }else{

            return BYPASS;

        }

    }

}

