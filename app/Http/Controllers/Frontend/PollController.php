<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Poll;
use App\Models\PollTopic;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function showAllPolls()
    {
        $PollTopics = PollTopic::where('status', 'on')->get();
        return view('Pages.Polls.poll-topic', compact('PollTopics'));
    }



    public function showPoll($id)
    {

        $currentDate = now()->toDateString();
        $PollTopic = PollTopic::findOrFail($id);
        $polls = Poll::get()->where('poll_topic_id', $PollTopic->id);
        $R1 = 0;
        $R2 = 0;
        $R3 = 0;
        $R4 = 0;
        $R5 = 0;
        $count = 0;
        $AVG = 0;
        $AVGrsult = '';
        $AVGcss = '';
        foreach ($polls as $poll) {
            $count++;
            if ($poll->rating == 5) {
                $R5++;
            } elseif ($poll->rating == 4) {
                $R4++;
            } elseif ($poll->rating == 3) {
                $R3++;
            } elseif ($poll->rating == 2) {
                $R2++;
            } elseif ($poll->rating == 1) {
                $R1++;
            }
        }

        if ($count) {
            $AVG = (($R2 * 2.5 + $R3 * 5 + $R4 * 7.5 + $R5 * 10) / $count) * 10;
            if ($AVG > 80) {
                $AVGrsult = 'موافق بشدة';
                $AVGcss = 'strongly-agree';
            } elseif ($AVG > 60) {
                $AVGrsult = 'موافق';
                $AVGcss = 'agree';
            } elseif ($AVG > 40) {
                $AVGrsult = 'محايد';
                $AVGcss = 'neutral';
            } elseif ($AVG > 20) {
                $AVGrsult = 'معارض';
                $AVGcss = 'disagree';
            } else {
                $AVGrsult = 'معارض بشدة';
                $AVGcss = 'strongly-disagree';
            }
        }

        return view('Pages.Polls.poll-details', compact('PollTopic', 'currentDate', 'AVG', 'AVGrsult', 'AVGcss'));
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

        return redirect()->back()->with('status', $message);

    }
}
