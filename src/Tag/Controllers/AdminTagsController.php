<?php
namespace TrezeVel\Tag\Controllers;

use TrezeVel\Tag\Models\Tag;
use App\Http\Requests;
use Illuminate\Http\Request;

/**
* Controller de tags
*/
class AdminTagsController extends Controller
{
    private $tag;

	public function __construct(Tag $tag)
	{
        $this->tag = $tag;
	}

    public function index()
    {
        $tags = $this->tag->all();
        return view('trezevelTag::index')->with(compact('tags'));
    }

    public function create()
    {
    	$tags = $this->getTagsForSelect();

    	return view('trezevelTag::create')->with(compact('tags'));
    }

    public function store(Request $request)
    {
    	$this->tag->create($request->all());

    	return redirect()->route('admin.tags.index');
    }

    public function edit($id)
    {
        $tag = $this->tag->find($id);
        if (!$tag->exists) {
            return redirect()->route('admin.tags.index');
        }

        $tags = $this->getTagsForSelect();

        return view('trezevelTag::edit')->with(compact('tags', 'tag'));
    }

    public function getTagsForSelect()
    {
        $tagsObj = $this->tag->all();
        $tags[''] = '-Nenhum-';
        foreach ($tagsObj as $tag) {
            $tags[$tag->id] = $tag->name;
        }

        return $tags;
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

        $tag = $this->tag->find($id);
        if (!$tag->exists) {
            return redirect()->route('admin.tags.index');
        }

        $tag->update($input);

        return redirect()->route('admin.tags.index');
    }

    public function destroy($id)
    {
        $tag = $this->tag->find($id);

        if ($tag->exists) {
            $tag->delete();
        }

        return redirect()->route('admin.tags.index');
    }
}
