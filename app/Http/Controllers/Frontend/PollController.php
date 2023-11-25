<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MunicipalityInfo;
use App\Models\Poll;
use App\Models\PollTopic;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function showAllPolls()
    {
        $municipalityInfo=MunicipalityInfo::latest()->first();
        $PollTopics = PollTopic::where('status', 'on')->get();
        return view('Pages.Polls.poll-topic', compact('PollTopics','municipalityInfo'));
    }



    public function showPoll($id)
    {
        $currentDate = now()->toDateString();
        $PollTopic = PollTopic::findOrFail($id);
        $municipalityInfo=MunicipalityInfo::latest()->first();
        return view('Pages.Polls.poll-details', compact('PollTopic','currentDate','municipalityInfo'));
    }
   
    public function userPoll(Request $request, $pollTopicId)
    {
        $request->validate([
            'national_id' => 'required|numeric|digits:10',
            'rating' => 'required|in:5,4,3,2,1',
            'user_message' => 'nullable|string',
        ]);

        $nationalId = $request->input('national_id');

        $existingPoll = Poll::where('national_id', $nationalId)->first();

        if ($existingPoll) {
            // If there is an existing poll with the same national_id, update it
            $existingPoll->update([
                'rating' => $request->input('rating'),
                'user_message' => $request->input('user_message'),
            ]);

            $message = 'تم تحديث رأيك بنجاح';
        } else {
            // If no existing poll found, create a new one
            Poll::create([
                'national_id' => $nationalId,
                'rating' => $request->input('rating'),
                'user_message' => $request->input('user_message'),
                'poll_topic_id' => $pollTopicId,
            ]);

            $message = 'شكراً لمشاركة رأيك';
        }
        $municipalityInfo=MunicipalityInfo::latest()->first();
        return redirect()->back()->with(['status' => $message, 'municipalityInfo' => $municipalityInfo]);

    }

}
