<?php

namespace Gummex\Http\Controllers;

use Illuminate\Http\Request;

use Gummex\Http\Requests;
use Gummex\Http\Requests\EditcodeRequest;
use Gummex\Http\Requests\ImportRequest;
use Gummex\PostCode;

use Illuminate\Support\Facades\Input;

class PostCodesController extends Controller {
	//
	public function showAllcodes() {
		$getall = PostCode::showallcodes();

		return view( 'postcodes.all', [ 'getall' => $getall ] );
	}

	public function showEdit( $id ) {

		$show = PostCode::showcode( $id );

		return view( 'postcodes.edit', [ 'show' => $show ] );


	}


	public function doEdit( EditcodeRequest $request ) {


		$editcode = PostCode::editcode( $request );


		if ( $editcode ) {
			return \Redirect::back();
		} else {
			return view( 'postcodes.edit' );

		}

	}


	public function showDelete( $id ) {


		$deletecode = PostCode::deletecode( $id );

		return redirect()->route( 'bookingall' )->with( 'messages', "Code is deleted Successfully" );

	}

	public function showAddcodes() {
		return view( 'postcodes.add' );

	}

	public function doAddcodes( EditcodeRequest $request ) {
		$add = PostCode::addcode( $request );
		if ( $add ) {
			return redirect()->route( 'bookingall' )->with( 'messages', "Your Code Is saved successfully !!" );

		} else {
			return \Redirect::back()->withErrors( $add->errors() );
		}

	}

	public function showImport() {
		return view( 'postcodes.import' );

	}

	public function doImport( ImportRequest $request ) {
		// getting all of the post data
		$file = array( 'file' => Input::file( 'file' ) );
		// setting up rules
		$rules = array( 'file' => 'required', ); //mimes:jpeg,bmp,png and for max size max:10000
		// doing the validation, passing post data, rules and the messages
		$validator = \Validator::make( $file, $rules );
		if ( $validator->fails() ) {
			// send back to the page with the input data and errors
			return \Redirect::back()->withInput()->withErrors( $validator );
		} else {
			// checking file is valid.
			if ( Input::file( 'file' )->isValid() ) {
				$destinationPath = 'uploads'; // upload path
				$extension       = "xlsx"; // getting image extension
				$fileName        = rand( 11111, 99999 ) . '.' . $extension; // renameing image
				Input::file( 'file' )->move( $destinationPath, $fileName ); // uploading file to given path
				// sending back with message
				\Session::flash( 'success', 'Upload successfully' );

				echo $destinationPath . '/' . $fileName;

//do inserting

				\Excel::load( $destinationPath . '/' . $fileName, function ( $reader ) {

					// Getting all results
					$results = $reader->get();

					//insert values to database
					//
					foreach ( $results as $result ) {
						$add = \DB::table( 'codes' )->insert( [ 'code' => $result[0], 'price' => $result[1] ] );
					}
				} );

				return \Redirect::route( 'bookingall' );


			} else {
				// sending back with error message.
				\Session::flash( 'error', 'uploaded file is not valid' );
				echo "error";
			}
		}
	}


}
