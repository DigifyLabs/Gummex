<?php

namespace Gummex\Http\Controllers;

use Gummex\Extra;
use Gummex\Http\Requests\ExtraRequest;
use Illuminate\Http\Request;

use Gummex\Http\Requests;

class ExtrasController extends Controller
{
	/**
	 * List all extras
	 *
	 * @return mixed
	 */
	public function index()
	{
		$extras = Extra::all();
		
		return view('extras/index', compact('extras'));
    }

	public function view($id)
	{
		$extra = Extra::find($id);
		
		return view('extras/view', compact('extra'));
	}
	
	/**
	 * Load the create new extra form
	 * 
	 */
	public function createExtra()
	{
		return view('extras/create');
	}

	/**
	 * Store extra
	 *
	 * @param ExtraRequest $request
	 * @return
	 */
	public function storeExtra(ExtraRequest $request)
	{
		Extra::create($request->all());

		return redirect()->route('listExtras');
	}

	/**
	 * Load edit extra form
	 * 
	 */
	public function editExtra($id)
	{
		$extra = Extra::find($id);
		
		return view('extras/edit', compact('extra'));
	}

	public function updateExtra($id, ExtraRequest $request)
	{
		$extra = Extra::find($id);
		$extra->update($request->all());
		
		return redirect()->route('listExtras');
	}

	public function deleteExtra($id)
	{
		$extra = Extra::destroy($id);

		return redirect()->route('listExtras');
	}
}
