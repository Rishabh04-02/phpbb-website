<?php
/**
 *
 * @package PhpbbWebsiteInterfaceBundle
 * @copyright (c) 2014 phpBB Group
 * @license http://opensource.org/licenses/gpl-3.0.php GNU General Public License v3
 * @author battye
 *
 */

namespace Phpbb\WebsiteInterfaceBundle\Helper\Extensions;

// A simple helper class to help us iterate through officially sanctioned extensions
class OfficialExtension
{
    /**
     * Extension Name
     * @var string
     * @access protected
     */
    protected $name;

    /**
     * Extension Description
     * @var string
     * @access protected
     */
    protected $description;

    /**
     * Extra Information for Developers
     * @var string
     * @access protected
     */
    protected $descriptionForDevelopers;

    /**
     * Link to extension cdb page
     * @var string
     * @access protected
     */
    protected $contribution;

    /**
     * Link to extension github repository
     * @var string
     * @access protected
     */
    protected $github;

    /**
     * Constructor
     *
     * @param string $name                     Extension Name
     * @param string $description              Extension Description
     * @param string $descriptionForDevelopers Extra Information for Developers
     * @param string $contribution             Link to extension cdb page
     * @param string $github                   Link to extension github repository
     */
    public function __construct($name, $description, $descriptionForDevelopers, $contribution, $github)
    {
        $this->name = $name;
        $this->description = $description;
        $this->descriptionForDevelopers = $descriptionForDevelopers;
        $this->contribution = $contribution;
        $this->github = $github;
    }

    /**
     * Get extension name
     *
     * @return string $this->name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get extension description
     *
     * @return string $this->description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get extra information for developers
     *
     * @return string $this->descriptionForDevelopers
     */
    public function getDescriptionForDevelopers()
    {
        return $this->descriptionForDevelopers;
    }

    /**
     * Get link to extension's cdb page
     *
     * @return string $this->contribution
     */
    public function getContribution()
    {
        return $this->contribution;
    }

    /**
     * Get link to extension's github repository
     *
     * @return string $this->github
     */
    public function getGithub()
    {
        return $this->github;
    }
}