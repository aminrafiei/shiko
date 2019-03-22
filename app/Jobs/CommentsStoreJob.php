<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

/**
 * Class CommentsStoreJob
 * @package App\Jobs
 */
class CommentsStoreJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable;

    /**
     * @var
     */
    protected $request;

    /**
     * @var
     */
    protected $product;

    /**
     * Create a new job instance.
     *
     * @param $request
     * @param $product
     */
    public function __construct($request, $product)
    {
        $this->request = $request;
        $this->product = $product;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $comment = new Comment();
        $comment->title = $this->request->title;
        $comment->description = $this->request->description;
        $comment->user_id = Auth::user()->id;

        $this->product->comment()->save($comment);
    }
}
