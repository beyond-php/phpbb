<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

namespace phpbb\db\migration\data\v33x;

class v3313rc1 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return version_compare($this->config['version'], '3.3.13-RC1', '>=');
	}

	public static function depends_on()
	{
		return [
			'\phpbb\db\migration\data\v33x\v3312',
		];
	}

	public function update_data()
	{
		return [
			['config.update', ['version', '3.3.13-RC1']],
		];
	}
}
