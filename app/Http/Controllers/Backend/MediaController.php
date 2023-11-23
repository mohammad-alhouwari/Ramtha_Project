<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\DataTables\MediaDataTable;
use App\Models\Media;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    use ImageUploadTrait;

    public function index(MediaDataTable $dataTables, Request $request)
    {
        $projectId = $request->get('project_id');
        $newsId = $request->get('news_id');
        $eventId = $request->get('event_id');

        if ($newsId != null) {
            $dataTables->setNewsId($newsId);
            return $dataTables->render('admin.pages.medias.index', compact('newsId'));
        } elseif ($projectId != null) {
            $dataTables->setProjectId($projectId);
            return $dataTables->render('admin.pages.medias.index', compact('projectId'));
        } elseif ($eventId != null) {
            $dataTables->setEventId($eventId);
            return $dataTables->render('admin.pages.medias.index', compact('eventId'));
        }
    }

    public function createProject($project_id)
    {
        return view('admin.pages.medias.create', compact('project_id'))->with('type', 'project');
    }

    public function createNews($news_id)
    {
        return view('admin.pages.medias.create', compact('news_id'))->with('type', 'news');
    }
    public function createEvent($event_id)
    {
        return view('admin.pages.medias.create', compact('event_id'))->with('type', 'event');
    }

    public function store(Request $request)
    {
        $request->validate([
            'media.*' => 'required',
        ]);

        $imagePath = $this->uploadMulImage($request, 'media', 'uploads');
        $notification = [
            'message' => 'Media Created Successfully!!',
            'alert-type' => 'success',
        ];
        //** Add medias in Projects */
        if ($projectId = $request->input('project_id')) {
            foreach ($imagePath as $imagePath) {
                Media::create([
                    'project_id' => $projectId,
                    'media_type' => 'image',
                    'media' => $imagePath,
                ]);
            }
            return redirect()->route('medias-admin.index', ['project_id' => $projectId])->with($notification);
        }
        //** Add medias in News */
        else if ($newsId = $request->input('news_id')) {
            foreach ($imagePath as $imagePath) {
                Media::create([
                    'news_id' => $newsId,
                    'media_type' => 'image',
                    'media' => $imagePath,
                ]);
            }
            return redirect()->route('medias-admin.index', ['news_id' => $newsId])->with($notification);
        } 
        else if ($eventId = $request->input('event_id')) {
            foreach ($imagePath as $imagePath) {
                Media::create([
                    'event_id' => $eventId,
                    'media_type' => 'image',
                    'media' => $imagePath,
                ]);
            }
            return redirect()->route('medias-admin.index', ['event_id' => $eventId])->with($notification);
        }
        return redirect()->route('medias-admin.index')->withErrors(['error' => 'Invalid request']);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $media = Media::findOrFail($id);
        return view('admin.pages.medias.edit', compact('media'));
    }


    public function update(Request $request, $id)
    {

        // Data Validate
        $request->validate([
            'media' => ['required'],
        ]);

        $data = $request->except(['_token', '_method']);

        $media = Media::findOrFail($id);
        //check if project
        $projectId = $media->project_id;
        //check if news
        $newsId = $media->news_id;
        //check if event
        $eventId = $media->event_id;
        $imagePath = $this->updateImage($request, 'media', 'uploads', $media->media);

        $data['media'] = empty(!$imagePath) ? $imagePath : $media->media;

        Media::where('id', $id)->update($data);

        $notification = array(
            'message' => 'Project Updated Successfully!!',
            'alert-type' => 'success',
        );
        if (!is_null($projectId)) {
            return redirect()->route('medias-admin.index', ['project_id' => $projectId])->with($notification);
        } elseif (!is_null($newsId)) {
            return redirect()->route('medias-admin.index', ['news_id' => $newsId])->with($notification);
        } elseif (!is_null($eventId)) {
            return redirect()->route('medias-admin.index', ['event_id' => $eventId])->with($notification);
        }
    }


    public function destroy($id)
    {
        $media = Media::findOrFail($id);
        $this->deleteImage($media->media);
        $media->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
    public function showAllMedia()
    {
        $gallery = Media::with('project', 'event', 'news')->get();
        dd($gallery);
        return view('admin.pages.', compact('gallery'));
    }
}
