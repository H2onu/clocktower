<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;


	class countBells extends Controller {
		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */

		public function calculate( Request $request ) {

			$start = $this->clean($request->StartTime);
			$end = $this->clean($request->EndTime);
			$sum = 0;


			if ($start >= $end) {

				$end = $this->end( $end );

			}

                for ($i = $start; $i <= $end; $i++) {

	                $x = $this->chimes($i);

	                $sum +=  $x;

                }

		return view( 'clocktower', compact( 'start' , 'end', 'sum' ) );


		}


		public function end($eTime) {


			$endTime = ($eTime + 24);

			return $endTime;

		}
		
		
		public function chimes($i) {

			if ( $i >= 13 && $i <= 24 ) {

				$i = ( $i - 12 );
			}

			if ( $i > 24 ) {

				$i = ( $i - 24 );

			}

			return $i;

		}

		public function clean($time) {

			$time = substr( $time, 0, 2 );

			return $time;


		}

		public function index() {
			//
		}

		/**
		 * Show the form for creating a new resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function create() {
			//
		}

		/**
		 * Store a newly created resource in storage.
		 *
		 * @param  \Illuminate\Http\Request $request
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function store( Request $request ) {
			//
		}

		/**
		 * Display the specified resource.
		 *
		 * @param  int $id
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function show( $id ) {
			//
		}

		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param  int $id
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function edit( $id ) {
			//
		}

		/**
		 * Update the specified resource in storage.
		 *
		 * @param  \Illuminate\Http\Request $request
		 * @param  int                      $id
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function update( Request $request, $id ) {
			//
		}

		/**
		 * Remove the specified resource from storage.
		 *
		 * @param  int $id
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function destroy( $id ) {
			//
		}


	}
