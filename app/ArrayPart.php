<?php

namespace app;

class ArrayPart
{
	/**
	 * Reverse string.
	 *
	 * @param string $text
	 *
	 * @return string
	 */
	public function reverseString( string $text )
	{
		$reverseString = " ";

		for ( $i = strlen( $text ) - 1; $i >= $text; $i -- )
		{
			$reverseString .= $text[ $i ];
		}

		return $reverseString;
	}

	/**
	 * Words in text.
	 *
	 * @param string $text
	 *
	 * @return array
	 */
	public function getWords( string $text )
	{
		$arrayData = explode( " ", strtolower( $text ) );

		$words = array_count_values( $arrayData );

		return $words;
	}

	/**
	 * Array Sum.
	 *
	 * @param array $elements
	 *
	 * @return int
	 */
	public function sumAllElementsArray( array $elements )
	{
		$sum = 0;

		for ( $i = 0; $i < count( $elements ); $i ++ )
		{
			for ( $j = 0; $j < count( $elements[ $i ] ); $j ++ )
			{
				$sum += $elements[ $i ][ $j ];
			}
		}

		return $sum;
	}

	/**
	 * Mirror Letters.
	 *
	 * @param string $text
	 *
	 * @return string
	 */
	public function mirrorLetter( string $text )
	{
		$letters = range( 'A', 'Z' );

		$letters = array_combine( array_values( $letters ), array_values( array_reverse( $letters ) ) );

		$words = explode( " ", $text );

		foreach ( $words as $key => $word )
		{
			foreach ( str_split( $word ) as $k => $symbol )
			{
				if ( isset( $letters[ $symbol ] ) )
				{
					$newSymbol = $letters[ $symbol ];

					$words[ $key ][ $k ] = $newSymbol;
				}
			}
		}
		$magicWords = implode( " ", $words );

		return $magicWords;
	}

	/**
	 * Unique words.
	 *
	 * @param string $text
	 *
	 * @return array
	 */
	public function getUniqueWords( string $text )
	{
		$arrayData = explode( " ", strtolower( $text ) );

		$out = array();

		foreach ( $arrayData as $item )
		{
			if ( ! in_array( $item, $out ) )
			{
				$out[] = $item;
			}
		}

		return $out;
	}

}