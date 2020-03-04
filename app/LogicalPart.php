<?php

namespace app;


class LogicalPart
{
	/**
	 * Allowed characters per line.
	 */
	private const NUMBER_COUNT = 6;

	/**
	 * An evil clown.
	 *
	 * @param string $text
	 *
	 * @return mixed|string
	 */
	public function evilClown( string $text )
	{
		$text = preg_replace( "/([),(])(\\1+)/i", "\\1", $text );

		return $text;
	}

	/**
	 * Lucky Tickets.
	 *
	 * @param array $tickets
	 *
	 * @return array
	 */
	public function luckyTickets( array $tickets )
	{
		$result = array_filter($tickets, function ($element)
		{
			return $this->isLuckyTicket($element);
		});

		return $result;
	}

	/**
	 * Checking the coincidence of the first and last numbers.
	 *
	 * @param $ticket
	 *
	 * @return bool
	 */
	protected function isLuckyTicket($ticket): bool
	{
		if( strlen($ticket) !== self::NUMBER_COUNT )
		{
			return false;
		}
		$firstCharacters = substr( $ticket, 0, 3 );

		$lastCharacters = substr( $ticket, 3, 3 );

		$firstResult = array_sum( str_split( $firstCharacters ) );

		$secondResult = array_sum( str_split( $lastCharacters ) );

		return $firstResult == $secondResult;
	}
}