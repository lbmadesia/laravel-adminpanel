<?php

namespace App\Repositories\Backend\Page;

use DB;
use Carbon\Carbon;
use App\Models\Page\Page;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PageRepository.
 */
class PageRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Page::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->select([
                config('module.pages.table').'.id',
                config('module.pages.table').'.created_at',
                config('module.pages.table').'.updated_at',
            ]);
    }

    /**
     * For Creating the respective model in storage
     *
     * @param array $input
     * @throws GeneralException
     * @return bool
     */
    public function create(array $input)
    {
        if ($Page::create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.pages.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Page $page
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Page $page, array $input)
    {
    	if ($page->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.pages.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Page $page
     * @throws GeneralException
     * @return bool
     */
    public function delete(Page $page)
    {
        if ($page->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.pages.delete_error'));
    }
}
