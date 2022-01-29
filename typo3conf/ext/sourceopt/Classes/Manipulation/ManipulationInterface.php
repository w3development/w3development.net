<?php
/**
 * Manipulation interface
 *
 * @author  Tim Lochmüller
 */

namespace HTML\Sourceopt\Manipulation;

/**
 * Manipulation interface
 */
interface ManipulationInterface
{

    /**
     * @param string $html The original HTML
     * @param array $configuration Configuration
     *
     * @return string the manipulated HTML
     */
    public function manipulate($html, array $configuration = []);
}
