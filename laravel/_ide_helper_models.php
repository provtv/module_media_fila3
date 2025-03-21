<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace Modules\Activity\Models{
/**
 * Modules\Activity\Models\Activity.
 *
 * @property int                             $id
 * @property string|null                     $log_name
 * @property string                          $description
 * @property string|null                     $subject_type
 * @property int|null                        $subject_id
 * @property string|null                     $causer_type
 * @property int|null                        $causer_id
 * @property Collection|null                 $properties
 * @property string|null                     $batch_uuid
 * @property string|null                     $event
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property Model|\Eloquent                 $causer
 * @property Collection                      $changes
 * @property Model|\Eloquent                 $subject
 * @method static \Illuminate\Database\Eloquent\Builder|Activity                               causedBy(\Illuminate\Database\Eloquent\Model $causer)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity                               forBatch(string $batchUuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity                               forEvent(string $event)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity                               forSubject(\Illuminate\Database\Eloquent\Model $subject)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity                               hasBatch()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity                               inLog(...$logNames)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity query()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereBatchUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereCauserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereCauserType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereEvent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereLogName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereProperties($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereSubjectType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereUpdatedBy($value)
 * @property Model|\Eloquent $causer
 * @property Collection      $changes
 * @property Model|\Eloquent $subject
 * @method static \Illuminate\Database\Eloquent\Builder|Activity                               causedBy(\Illuminate\Database\Eloquent\Model $causer)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity                               forBatch(string $batchUuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity                               forEvent(string $event)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity                               forSubject(\Illuminate\Database\Eloquent\Model $subject)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity                               hasBatch()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity                               inLog(...$logNames)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity query()
 * @property string|null $deleted_at
 * @property string|null $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereDeletedBy($value)
 * @mixin \Eloquent
 */
	class Activity extends \Eloquent {}
}

namespace Modules\Activity\Models{
/**
 * Modules\Activity\Models\Snapshot.
 *
 * @property int                             $id
 * @property string                          $aggregate_uuid
 * @property int                             $aggregate_version
 * @property array                           $state
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot query()
 * @method static \Illuminate\Database\Eloquent\Builder|EloquentSnapshot                       uuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereAggregateUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereAggregateVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EloquentSnapshot                       uuid(string $uuid)
 * @mixin \Eloquent
 */
	class Snapshot extends \Eloquent {}
}

namespace Modules\Activity\Models{
/**
 * Modules\Activity\Models\StoredEvent.
 *
 * @property int                                                    $id
 * @property string|null                                            $aggregate_uuid
 * @property int|null                                               $aggregate_version
 * @property int                                                    $event_version
 * @property string                                                 $event_class
 * @property array                                                  $event_properties
 * @property SchemalessAttributes                                   $meta_data
 * @property string                                                 $created_at
 * @property string|null                                            $created_by
 * @property string|null                                            $updated_by
 * @property \Spatie\EventSourcing\StoredEvents\ShouldBeStored|null $event
 * @method static EloquentStoredEventQueryBuilder|StoredEvent afterVersion(int $version)
 * @method static EloquentStoredEventCollection<int, static>  all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>  get($columns = ['*'])
 * @method static EloquentStoredEventQueryBuilder|StoredEvent lastEvent(string ...$eventClasses)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent newModelQuery()
 * @method static EloquentStoredEventQueryBuilder|StoredEvent newQuery()
 * @method static EloquentStoredEventQueryBuilder|StoredEvent query()
 * @method static EloquentStoredEventQueryBuilder|StoredEvent startingFrom(int $storedEventId)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereAggregateRoot(string $uuid)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereAggregateUuid($value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereAggregateVersion($value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereCreatedAt($value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereCreatedBy($value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereEvent(string ...$eventClasses)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereEventClass($value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereEventProperties($value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereEventVersion($value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereId($value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereMetaData($value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent wherePropertyIs(string $property, ?mixed $value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent wherePropertyIsNot(string $property, ?mixed $value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereUpdatedBy($value)
 * @property \Spatie\EventSourcing\StoredEvents\ShouldBeStored|null $event
 * @property SchemalessAttributes                                   $meta_data
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|EloquentStoredEvent withMetaDataAttributes()
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @mixin \Eloquent
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventCollection<int, static> get($columns = ['*'])
 */
	class StoredEvent extends \Eloquent {}
}

namespace Modules\Blog\Models{
/**
 * Modules\Blog\Models\Article.
 *
 * @property Profile|null                                                                                               $author
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Blog\Models\Category>                               $categories
 * @property int|null                                                                                                   $categories_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Blog\Models\Comment>                                $comments
 * @property int|null                                                                                                   $comments_count
 * @property string                                                                                                     $human_read_time
 * @property \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property int|null                                                                                                   $media_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Blog\Models\Tag>                                    $tags
 * @property \Illuminate\Database\Eloquent\Collection<int, \Spatie\ModelStatus\Status>                                  $statuses
 * @property int|null                                                                                                   $statuses_count
 * @property int|null                                                                                                   $tags_count
 * @property \Modules\Xot\Contracts\UserContract|null                                                                                                  $user
 * @property string                                                                                                     $body
 * @property Carbon                                                                                                     $published_at
 * @property Carbon                                                                                                     $updated_at
 * @property string                                                                                                     $slug
 * @property string                                                                                                     $title
 * @property string                                                                                                     $description
 * @property string                                                                                                     $main_image_upload
 * @property string                                                                                                     $main_image_url
 * @property string                                                                                                     $content_blocks
 * @method static \Illuminate\Database\Eloquent\Builder|Article   article(string $id)
 * @method static \Illuminate\Database\Eloquent\Builder|Article   author(string $profile_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Article   category(string $id)
 * @method static \Illuminate\Database\Eloquent\Builder|Article   currentStatus(...$names)
 * @method static \Illuminate\Database\Eloquent\Builder|Article   differentFromCurrentArticle(string $current_article)
 * @method static \Modules\Blog\Database\Factories\ArticleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Article   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article   onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Article   otherCurrentStatus(...$names)
 * @method static \Illuminate\Database\Eloquent\Builder|Article   published()
 * @method static \Illuminate\Database\Eloquent\Builder|Article   publishedUntilToday()
 * @method static \Illuminate\Database\Eloquent\Builder|Article   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Article   search(string $searching)
 * @method static \Illuminate\Database\Eloquent\Builder|Article   showHomepage()
 * @method static \Illuminate\Database\Eloquent\Builder|Article   tag(string $id)
 * @method static \Illuminate\Database\Eloquent\Builder|Article   withAllTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Article   withAllTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Article   withAnyTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Article   withAnyTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Article   withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Article   withoutTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Article   withoutTrashed()
 * @property string                                                                    $id
 * @property string                                                                    $uuid
 * @property string|null                                                               $content
 * @property string|null                                                               $picture
 * @property int|null                                                                  $category_id
 * @property int|null                                                                  $author_id
 * @property string|null                                                               $status
 * @property int                                                                       $show_on_homepage
 * @property int|null                                                                  $read_time
 * @property string|null                                                               $excerpt
 * @property string                                                                    $created_at
 * @property \Illuminate\Support\Carbon|null                                           $deleted_at
 * @property string|null                                                               $updated_by
 * @property string|null                                                               $created_by
 * @property string|null                                                               $deleted_by
 * @property array|null                                                                $footer_blocks
 * @property array|null                                                                $sidebar_blocks
 * @property int                                                                       $is_featured
 * @property string|null                                                               $closed_at
 * @property Category|null                                                             $category
 * @property string                                                                    $main_image
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Blog\Models\Order> $orders
 * @property int|null                                                                  $orders_count
 * @property \Illuminate\Database\Eloquent\Collection<int, Rating>                     $ratings
 * @property int|null                                                                  $ratings_count
 * @property mixed                                                                     $translations
 * @property string|null                                                               $rewarded_at
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereClosedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereContentBlocks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereFooterBlocks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereIsFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereMainImageUpload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereMainImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereReadTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereShowOnHomepage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUuid($value)
 * @property int         $status_display
 * @property string|null $bet_end_date
 * @property string|null $event_start_date
 * @property string|null $event_end_date
 * @property int         $is_wagerable
 * @property int|null    $wagers_count
 * @property int|null    $wagers_count_canonical
 * @property int|null    $wagers_count_total
 * @property int|null    $wagers
 * @property string|null $brier_score
 * @property string|null $brier_score_play_money
 * @property string|null $brier_score_real_money
 * @property float|null  $volume_play_money
 * @property float|null  $volume_real_money
 * @property int         $is_following
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereBetEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereBrierScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereBrierScorePlayMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereBrierScoreRealMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereEventEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereEventStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereIsFollowing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereIsWagerable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereSidebarBlocks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereStatusDisplay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereVolumePlayMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereVolumeRealMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereWagers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereWagersCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereWagersCountCanonical($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereWagersCountTotal($value)
 * @property \Modules\Rating\Models\RatingMorph $pivot
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereJsonContainsLocale(string $column, string $locale, ?mixed $value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereJsonContainsLocales(string $column, array $locales, ?mixed $value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereRewardedAt($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Article extends \Eloquent implements \Spatie\Feed\Feedable, \Spatie\MediaLibrary\HasMedia, \Modules\Rating\Models\Contracts\HasRatingContract {}
}

namespace Modules\Blog\Models{
/**
 * Modules\Blog\Models\ArticleCategory.
 *
 * @property string                          $id
 * @property int                             $category_id
 * @property int                             $article_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory whereArticleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory withoutTrashed()
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory whereDeletedBy($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class ArticleCategory extends \Eloquent {}
}

namespace Modules\Blog\Models{
/**
 * Modules\Cms\Models\Menu.
 *
 * @property int                             $id
 * @property string                          $name
 * @property array|null                      $items
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Modules\Blog\Database\Factories\MenuFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   whereItems($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   withoutTrashed()
 * @property string|null                                                                                                $link
 * @property string|null                                                                                                $title
 * @property string|null                                                                                                $description
 * @property string|null                                                                                                $action_text
 * @property string|null                                                                                                $category_id
 * @property \Illuminate\Support\Carbon|null                                                                            $start_date
 * @property \Illuminate\Support\Carbon|null                                                                            $end_date
 * @property bool                                                                                                       $hot_topic
 * @property int|null                                                                                                   $open_markets_count
 * @property bool                                                                                                       $landing_banner
 * @property int|null                                                                                                   $pos
 * @property Category|null                                                                                              $category
 * @property string                                                                                                     $desktop_thumbnail
 * @property string                                                                                                     $desktop_thumbnail_webp
 * @property string                                                                                                     $mobile_thumbnail
 * @property string                                                                                                     $mobile_thumbnail_webp
 * @property \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property int|null                                                                                                   $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereActionText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereHotTopic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereLandingBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereOpenMarketsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner wherePos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereTitle($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Banner extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Modules\Blog\Models{
/**
 * Modules\Blog\Models\Category.
 *
 * @property int                                                                                                        $id
 * @property string                                                                                                     $title
 * @property string                                                                                                     $slug
 * @property \Illuminate\Support\Carbon|null                                                                            $created_at
 * @property \Illuminate\Support\Carbon|null                                                                            $updated_at
 * @property string|null                                                                                                $updated_by
 * @property string|null                                                                                                $created_by
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Blog\Models\Article>                                $articles
 * @property int|null                                                                                                   $articles_count
 * @property \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property int|null                                                                                                   $media_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Blog\Models\Post>                                   $posts
 * @property int|null                                                                                                   $posts_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Blog\Models\Post>                                   $publishedPosts
 * @property int|null                                                                                                   $published_posts_count
 * @method static \Modules\Blog\Database\Factories\CategoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Category   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category   onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Category   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category   whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category   whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category   whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category   withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Category   withoutTrashed()
 * @property array|null                                                                            $description
 * @property \Illuminate\Support\Carbon|null                                                       $deleted_at
 * @property string|null                                                                           $deleted_by
 * @property string|null                                                                           $parent_id
 * @property \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection|\Modules\Blog\Models\Category[] $children
 * @property int|null                                                                              $children_count
 * @property Category|null                                                                         $parent
 * @property mixed                                                                                 $post_counter
 * @property mixed                                                                                 $translations
 * @property \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection|\Modules\Blog\Models\Category[] $ancestors                  The model's recursive parents.
 * @property int|null                                                                              $ancestors_count
 * @property \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection|\Modules\Blog\Models\Category[] $ancestorsAndSelf           The model's recursive parents and itself.
 * @property int|null                                                                              $ancestors_and_self_count
 * @property \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection|\Modules\Blog\Models\Category[] $bloodline                  The model's ancestors, descendants and itself.
 * @property int|null                                                                              $bloodline_count
 * @property \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection|\Modules\Blog\Models\Category[] $childrenAndSelf            The model's direct children and itself.
 * @property int|null                                                                              $children_and_self_count
 * @property \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection|\Modules\Blog\Models\Category[] $descendants                The model's recursive children.
 * @property int|null                                                                              $descendants_count
 * @property \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection|\Modules\Blog\Models\Category[] $descendantsAndSelf         The model's recursive children and itself.
 * @property int|null                                                                              $descendants_and_self_count
 * @property \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection|\Modules\Blog\Models\Category[] $parentAndSelf              The model's direct parent and itself.
 * @property int|null                                                                              $parent_and_self_count
 * @property Category|null                                                                         $rootAncestor               The model's topmost parent.
 * @property \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection|\Modules\Blog\Models\Category[] $siblings                   The parent's other children.
 * @property int|null                                                                              $siblings_count
 * @property \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection|\Modules\Blog\Models\Category[] $siblingsAndSelf            All the parent's children.
 * @property int|null                                                                              $siblings_and_self_count
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> all($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        breadthFirst()
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        depthFirst()
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        doesntHaveChildren()
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> get($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        getExpressionGrammar()
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        hasChildren()
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        hasParent()
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        isLeaf()
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        isRoot()
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        tree($maxDepth = null)
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        treeOf(\Illuminate\Database\Eloquent\Model|callable $constraint, $maxDepth = null)
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        whereDeletedAt($value)
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        whereDeletedBy($value)
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        whereDepth($operator, $value = null)
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        whereDescription($value)
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        whereLocale(string $column, string $locale)
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        whereLocales(string $column, array $locales)
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        whereParentId($value)
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        withGlobalScopes(array $scopes)
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        withRelationshipExpression($direction, callable $constraint, $initialDepth, $from = null, $maxDepth = null)
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> all($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> get($columns = ['*'])
 * @property string|null                                                                 $icon
 * @property Banner|null                                                                 $banner
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Blog\Models\Article> $categoryArticles
 * @property int|null                                                                    $category_articles_count
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> all($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> get($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        whereIcon($value)
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> all($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> get($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        whereJsonContainsLocale(string $column, string $locale, ?mixed $value)
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Category        whereJsonContainsLocales(string $column, array $locales, ?mixed $value)
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> all($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> get($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> all($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> get($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> all($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> get($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> all($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> get($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> all($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> get($columns = ['*'])
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> all($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> get($columns = ['*'])
 */
	class Category extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Modules\Blog\Models{
/**
 * Modules\Blog\Models\CategoryPost.
 *
 * @property string                          $id
 * @property int                             $category_id
 * @property int                             $post_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryPost newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryPost newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryPost onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryPost query()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryPost whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryPost whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryPost whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryPost whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryPost wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryPost whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryPost whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryPost withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryPost withoutTrashed()
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryPost whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryPost whereDeletedBy($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class CategoryPost extends \Eloquent {}
}

namespace Modules\Blog\Models{
/**
 * Modules\Blog\Models\Comment.
 *
 * @property int                                                    $id
 * @property string                                                 $comment
 * @property int                                                    $post_id
 * @property int                                                    $user_id
 * @property \Illuminate\Support\Carbon|null                        $created_at
 * @property \Illuminate\Support\Carbon|null                        $updated_at
 * @property int|null                                               $parent_id
 * @property Article|null                                           $article
 * @property Profile|null                                           $author
 * @property \Illuminate\Database\Eloquent\Collection<int, Comment> $childrens
 * @property int|null                                               $childrens_count
 * @property \Illuminate\Database\Eloquent\Collection<int, Comment> $comments
 * @property int|null                                               $comments_count
 * @property Comment|null                                           $parentComment
 * @property \Modules\Xot\Contracts\UserContract|null                                              $user
 * @method static \Modules\Blog\Database\Factories\CommentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   withoutTrashed()
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereUpdatedBy($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Comment extends \Eloquent {}
}

namespace Modules\Blog\Models{
/**
 * Modules\Blog\Models\ContactEntry.
 *
 * @method static \Modules\Blog\Database\Factories\ContactEntryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEntry   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEntry   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEntry   onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEntry   query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEntry   withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEntry   withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class ContactEntry extends \Eloquent {}
}

namespace Modules\Blog\Models{
/**
 * Modules\Blog\Models\Order.
 *
 * @property date                            $date
 * @property string                          $article_id
 * @property string                          $rating_id
 * @property int                             $credits
 * @property int                             $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @property string|null                     $model_type
 * @property int|null                        $model_id
 * @method static \Modules\Blog\Database\Factories\OrderFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Order   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order   onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Order   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order   whereCredits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order   whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order   whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order   whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order   whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order   whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order   whereRatingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order   whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order   withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Order   withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Order extends \Eloquent {}
}

namespace Modules\Blog\Models{
/**
 * Modules\Blog\Models\PostView.
 *
 * @property int                             $id
 * @property string                          $ip_address
 * @property string                          $user_agent
 * @property int                             $post_id
 * @property int                             $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Modules\Blog\Database\Factories\PostViewFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   whereUserAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   withoutTrashed()
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|PostView whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView whereUpdatedBy($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class PostView extends \Eloquent {}
}

namespace Modules\Blog\Models{
/**
 * Modules\Blog\Models\Profile.
 *
 * @property float                                                                                                         $credits
 * @property int                                                                                                           $id
 * @property string|null                                                                                                   $user_id
 * @property string|null                                                                                                   $first_name
 * @property string|null                                                                                                   $last_name
 * @property string|null                                                                                                   $email
 * @property \Illuminate\Support\Carbon|null                                                                               $created_at
 * @property \Illuminate\Support\Carbon|null                                                                               $updated_at
 * @property string|null                                                                                                   $updated_by
 * @property string|null                                                                                                   $created_by
 * @property string|null                                                                                                   $deleted_at
 * @property string|null                                                                                                   $deleted_by
 * @property string|null                                                                                                   $slug
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes|null                                                        $extra
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Blog\Models\Article>                                   $articles
 * @property int|null                                                                                                      $articles_count
 * @property string                                                                                                        $avatar
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\DeviceUser>                                $deviceUsers
 * @property int|null                                                                                                      $device_users_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Device>                                    $devices
 * @property int|null                                                                                                      $devices_count
 * @property string|null                                                                                                   $full_name
 * @property \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media>    $media
 * @property int|null                                                                                                      $media_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\DeviceUser>                                $mobileDeviceUsers
 * @property int|null                                                                                                      $mobile_device_users_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Device>                                    $mobileDevices
 * @property int|null                                                                                                      $mobile_devices_count
 * @property \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property int|null                                                                                                      $notifications_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Permission>                                $permissions
 * @property int|null                                                                                                      $permissions_count
 * @property \Illuminate\Database\Eloquent\Collection<int, RatingMorph>                                                    $ratingMorphs
 * @property int|null                                                                                                      $rating_morphs_count
 * @property \Illuminate\Database\Eloquent\Collection<int, Rating>                                                         $ratings
 * @property int|null                                                                                                      $ratings_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Role>                                      $roles
 * @property int|null                                                                                                      $roles_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Team>                                      $teams
 * @property int|null                                                                                                      $teams_count
 * @property \Modules\Xot\Contracts\UserContract|null                                                                                                     $user
 * @property string|null                                                                                                   $user_name
 * @method static \Modules\Blog\Database\Factories\ProfileFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile                             permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile                             role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereCredits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile                             withExtraAttributes()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile                             withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile                             withoutRole($roles, $guard = null)
 * @property \Modules\User\Models\DeviceUser                                                 $pivot
 * @property \Modules\User\Models\Membership                                                 $membership
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Blog\Models\Transaction> $transanctions
 * @property int|null                                                                        $transanctions_count
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Profile extends \Eloquent {}
}

namespace Modules\Blog\Models{
/**
 * Modules\Blog\Models\Status.
 *
 * @property int                                           $id
 * @property string                                        $name
 * @property string|null                                   $reason
 * @property string                                        $model_type
 * @property int                                           $model_id
 * @property \Illuminate\Support\Carbon|null               $created_at
 * @property \Illuminate\Support\Carbon|null               $updated_at
 * @property string|null                                   $updated_by
 * @property string|null                                   $created_by
 * @property \Illuminate\Database\Eloquent\Model|\Eloquent $model
 * @method static \Illuminate\Database\Eloquent\Builder|Status newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status query()
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereUpdatedBy($value)
 * @property string $ip_address
 * @property string $user_agent
 * @property int    $post_id
 * @property int    $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereUserAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereUserId($value)
 * @property string|null $deleted_at
 * @property string|null $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereDeletedBy($value)
 * @mixin \Eloquent
 */
	class Status extends \Eloquent {}
}

namespace Modules\Blog\Models{
/**
 * Modules\Blog\Models\Tag.
 *
 * @property int                             $id
 * @property array                           $name
 * @property array                           $slug
 * @property string|null                     $type
 * @property int|null                        $order_column
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|Tag                               containing(string $name, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag                               ordered(string $direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag                               whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag                               whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag                               withType(?string $type = null)
 * @property mixed       $translations
 * @property string|null $deleted_at
 * @property string|null $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag                               whereJsonContainsLocale(string $column, string $locale, ?mixed $value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag                               whereJsonContainsLocales(string $column, array $locales, ?mixed $value)
 * @mixin \Eloquent
 */
	class Tag extends \Eloquent {}
}

namespace Modules\Blog\Models{
/**
 * Modules\Blog\Models\Taggable.
 *
 * @property int                             $id
 * @property int                             $tag_id
 * @property string                          $taggable_type
 * @property int                             $taggable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property array                           $custom_properties
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable query()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereTaggableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereTaggableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable withoutTrashed()
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereDeletedBy($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Taggable extends \Eloquent {}
}

namespace Modules\Blog\Models{
/**
 * Modules\Blog\Models\TextWidget.
 *
 * @property int                                                                                                        $id
 * @property string                                                                                                     $key
 * @property string|null                                                                                                $image
 * @property string|null                                                                                                $title
 * @property string|null                                                                                                $content
 * @property int                                                                                                        $active
 * @property \Illuminate\Support\Carbon|null                                                                            $created_at
 * @property \Illuminate\Support\Carbon|null                                                                            $updated_at
 * @property string|null                                                                                                $updated_by
 * @property string|null                                                                                                $created_by
 * @property \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property int|null                                                                                                   $media_count
 * @method static \Modules\Blog\Database\Factories\TextWidgetFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget   onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget   query()
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget   whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget   whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget   whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget   whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget   whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget   whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget   withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget   withoutTrashed()
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget whereDeletedBy($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class TextWidget extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Modules\Blog\Models{
/**
 * 
 *
 * @property int                             $id
 * @property string|null                     $model_type
 * @property int|null                        $model_id
 * @property int|null                        $credits
 * @property string|null                     $user_id
 * @property string|null                     $note
 * @property string|null                     $date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Modules\Blog\Database\Factories\TransactionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction   onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction   whereCredits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction   whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction   whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction   whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction   whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction   whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction   whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction   whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction   whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction   withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction   withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Transaction extends \Eloquent {}
}

namespace Modules\Blog\Models{
/**
 * Modules\Blog\Models\UpvoteDownvote.
 *
 * @property int                             $id
 * @property int                             $is_upvote
 * @property int                             $post_id
 * @property int                             $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Modules\Blog\Database\Factories\UpvoteDownvoteFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   query()
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   whereIsUpvote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   withoutTrashed()
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote whereUpdatedBy($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class UpvoteDownvote extends \Eloquent {}
}

namespace Modules\Cms\Models{
/**
 * Modules\Cms\Models\Conf.
 *
 * @property int         $id
 * @property string|null $name
 * @method static \Illuminate\Database\Eloquent\Builder|Conf newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Conf newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Conf query()
 * @method static \Illuminate\Database\Eloquent\Builder|Conf whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conf whereName($value)
 * @mixin IdeHelperConf
 * @mixin \Eloquent
 */
	class Conf extends \Eloquent {}
}

namespace Modules\Cms\Models{
/**
 * Modules\Cms\Models\Menu.
 *
 * @property int                             $id
 * @property string                          $name
 * @property array|null                      $items
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Modules\Blog\Database\Factories\MenuFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   whereItems($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu   withoutTrashed()
 * @property string                                                                                                     $title
 * @property int|null                                                                                                   $parent_id
 * @property \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection|\Modules\Cms\Models\Menu[]                           $children
 * @property int|null                                                                                                   $children_count
 * @property \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property int|null                                                                                                   $media_count
 * @property Menu|null                                                                                                  $parent
 * @property \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection|\Modules\Cms\Models\Menu[]                           $ancestors                  The model's recursive parents.
 * @property int|null                                                                                                   $ancestors_count
 * @property \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection|\Modules\Cms\Models\Menu[]                           $ancestorsAndSelf           The model's recursive parents and itself.
 * @property int|null                                                                                                   $ancestors_and_self_count
 * @property \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection|\Modules\Cms\Models\Menu[]                           $bloodline                  The model's ancestors, descendants and itself.
 * @property int|null                                                                                                   $bloodline_count
 * @property \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection|\Modules\Cms\Models\Menu[]                           $childrenAndSelf            The model's direct children and itself.
 * @property int|null                                                                                                   $children_and_self_count
 * @property \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection|\Modules\Cms\Models\Menu[]                           $descendants                The model's recursive children.
 * @property int|null                                                                                                   $descendants_count
 * @property \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection|\Modules\Cms\Models\Menu[]                           $descendantsAndSelf         The model's recursive children and itself.
 * @property int|null                                                                                                   $descendants_and_self_count
 * @property \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection|\Modules\Cms\Models\Menu[]                           $parentAndSelf              The model's direct parent and itself.
 * @property int|null                                                                                                   $parent_and_self_count
 * @property Menu|null                                                                                                  $rootAncestor               The model's topmost parent.
 * @property \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection|\Modules\Cms\Models\Menu[]                           $siblings                   The parent's other children.
 * @property int|null                                                                                                   $siblings_count
 * @property \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection|\Modules\Cms\Models\Menu[]                           $siblingsAndSelf            All the parent's children.
 * @property int|null                                                                                                   $siblings_and_self_count
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> all($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Menu            breadthFirst()
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Menu            depthFirst()
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Menu            doesntHaveChildren()
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> get($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Menu            getExpressionGrammar()
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Menu            hasChildren()
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Menu            hasParent()
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Menu            isLeaf()
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Menu            isRoot()
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Menu            tree($maxDepth = null)
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Menu            treeOf(\Illuminate\Database\Eloquent\Model|callable $constraint, $maxDepth = null)
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Menu            whereDepth($operator, $value = null)
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Menu            whereParentId($value)
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Menu            whereTitle($value)
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Menu            withGlobalScopes(array $scopes)
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder|Menu            withRelationshipExpression($direction, callable $constraint, $initialDepth, $from = null, $maxDepth = null)
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> all($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> get($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> all($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> get($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> all($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> get($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> all($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> get($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> all($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> get($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> all($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> get($columns = ['*'])
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> all($columns = ['*'])
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, static> get($columns = ['*'])
 */
	class Menu extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Modules\Cms\Models{
/**
 * Modules\Cms\Models\Module.
 *
 * @property int         $id
 * @property string|null $name
 * @method static ModuleFactory  factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Module newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module query()
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereName($value)
 * @mixin IdeHelperModule
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Module extends \Eloquent {}
}

namespace Modules\Cms\Models{
/**
 * Modules\Cms\Models\Page.
 *
 * @property string                          $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string                          $slug
 * @property string                          $title
 * @property string                          $content
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @property array|null                      $content_blocks
 * @method static \Modules\Blog\Database\Factories\PageFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Page   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page   onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Page   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Page   whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page   whereContentBlocks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page   whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page   whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page   whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page   whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page   whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page   withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Page   withoutTrashed()
 * @property array|null $sidebar_blocks
 * @property array      $footer_blocks
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereFooterBlocks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereSidebarBlocks($value)
 * @property mixed $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereJsonContainsLocale(string $column, string $locale, ?mixed $value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereJsonContainsLocales(string $column, array $locales, ?mixed $value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Page extends \Eloquent {}
}

namespace Modules\Fixcity\Models{
/**
 * 
 *
 * @property int                                                                                                           $id
 * @property string|null                                                                                                   $type
 * @property string|null                                                                                                   $first_name
 * @property string|null                                                                                                   $last_name
 * @property string|null                                                                                                   $full_name
 * @property string|null                                                                                                   $email
 * @property \Illuminate\Support\Carbon|null                                                                               $created_at
 * @property \Illuminate\Support\Carbon|null                                                                               $updated_at
 * @property string|null                                                                                                   $user_id
 * @property string|null                                                                                                   $updated_by
 * @property string|null                                                                                                   $created_by
 * @property \Illuminate\Support\Carbon|null                                                                               $deleted_at
 * @property string|null                                                                                                   $deleted_by
 * @property bool                                                                                                          $is_active
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes                                                             $extra
 * @property string                                                                                                        $avatar
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\DeviceUser>                                $deviceUsers
 * @property int|null                                                                                                      $device_users_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Device>                                    $devices
 * @property int|null                                                                                                      $devices_count
 * @property \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media>    $media
 * @property int|null                                                                                                      $media_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\DeviceUser>                                $mobileDeviceUsers
 * @property int|null                                                                                                      $mobile_device_users_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Device>                                    $mobileDevices
 * @property int|null                                                                                                      $mobile_devices_count
 * @property \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property int|null                                                                                                      $notifications_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Permission>                                $permissions
 * @property int|null                                                                                                      $permissions_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Role>                                      $roles
 * @property int|null                                                                                                      $roles_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Team>                                      $teams
 * @property int|null                                                                                                      $teams_count
 * @property \Modules\User\Models\User|null                                                                                $user
 * @property string|null                                                                                                   $user_name
 * @method static \Modules\Gdpr\Database\Factories\ProfileFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile                             permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile                             role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile                             withExtraAttributes()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile                             withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile                             withoutRole($roles, $guard = null)
 * @property float                           $credits
 * @property string|null                     $slug
 * @property \Modules\User\Models\DeviceUser $pivot
 * @property \Modules\User\Models\Membership $membership
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCredits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereSlug($value)
 * @mixin \Eloquent
 * @property-read Profile|null $creator
 * @property-read Profile|null $updater
 */
	class Profile extends \Eloquent {}
}

namespace Modules\Gdpr\Models{
/**
 * 
 *
 * @property string                          $id
 * @property string                          $treatment_id
 * @property string                          $subject_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @property Treatment|null                  $treatment
 * @method static \Modules\Gdpr\Database\Factories\ConsentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereTreatmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereUpdatedBy($value)
 * @property Treatment|null $treatment
 * @method static \Modules\Gdpr\Database\Factories\ConsentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereTreatmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereTreatmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereUpdatedBy($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Consent extends \Eloquent {}
}

namespace Modules\Gdpr\Models{
/**
 * 
 *
 * @property string                          $id
 * @property string|null                     $treatment_id
 * @property string|null                     $consent_id
 * @property string                          $subject_id
 * @property string                          $ip
 * @property string                          $action
 * @property string                          $payload
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @property Consent|null                    $consent
 * @method static \Modules\Gdpr\Database\Factories\EventFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Event   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereConsentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereTreatmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereUpdatedBy($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Event extends \Eloquent {}
}

namespace Modules\Gdpr\Models{
/**
 * 
 *
 * @property int                                                                                                           $id
 * @property string|null                                                                                                   $type
 * @property string|null                                                                                                   $first_name
 * @property string|null                                                                                                   $last_name
 * @property string|null                                                                                                   $full_name
 * @property string|null                                                                                                   $email
 * @property \Illuminate\Support\Carbon|null                                                                               $created_at
 * @property \Illuminate\Support\Carbon|null                                                                               $updated_at
 * @property string|null                                                                                                   $user_id
 * @property string|null                                                                                                   $updated_by
 * @property string|null                                                                                                   $created_by
 * @property \Illuminate\Support\Carbon|null                                                                               $deleted_at
 * @property string|null                                                                                                   $deleted_by
 * @property bool                                                                                                          $is_active
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes                                                             $extra
 * @property string                                                                                                        $avatar
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\DeviceUser>                                $deviceUsers
 * @property int|null                                                                                                      $device_users_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Device>                                    $devices
 * @property int|null                                                                                                      $devices_count
 * @property \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media>    $media
 * @property int|null                                                                                                      $media_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\DeviceUser>                                $mobileDeviceUsers
 * @property int|null                                                                                                      $mobile_device_users_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Device>                                    $mobileDevices
 * @property int|null                                                                                                      $mobile_devices_count
 * @property \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property int|null                                                                                                      $notifications_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Permission>                                $permissions
 * @property int|null                                                                                                      $permissions_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Role>                                      $roles
 * @property int|null                                                                                                      $roles_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Team>                                      $teams
 * @property int|null                                                                                                      $teams_count
 * @property \Modules\User\Models\User|null                                                                                $user
 * @property string|null                                                                                                   $user_name
 * @method static \Modules\Gdpr\Database\Factories\ProfileFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile                             permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile                             role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile                             withExtraAttributes()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile                             withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile                             withoutRole($roles, $guard = null)
 * @property string|null $deleted_by
 * @property int         $is_active
 * @method static \Modules\Gdpr\Database\Factories\ProfileFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereUserId($value)
 * @property \Modules\User\Models\DeviceUser $pivot
 * @property \Modules\User\Models\Membership $membership
 * @mixin \Eloquent
 * @property string $credits
 * @property string|null $slug
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCredits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereSlug($value)
 */
	class Profile extends \Eloquent {}
}

namespace Modules\Gdpr\Models{
/**
 * 
 *
 * @property string                          $id
 * @property int                             $active
 * @property int                             $required
 * @property string                          $name
 * @property string                          $description
 * @property string|null                     $documentVersion
 * @property string|null                     $documentUrl
 * @property int                             $weight
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Modules\Gdpr\Database\Factories\TreatmentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 query()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 whereDocumentUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 whereDocumentVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 query()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 whereDocumentUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 whereDocumentVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment                                 whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereUpdatedBy($value)
 * @property string|null $deleted_by
 * @method static \Modules\Gdpr\Database\Factories\TreatmentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDocumentUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDocumentVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereWeight($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Treatment extends \Eloquent {}
}

namespace Modules\Geo\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder|County newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|County newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|County query()
 * @mixin \Eloquent
 */
	class County extends \Eloquent {}
}

namespace Modules\Geo\Models{
/**
 * Modules\Geo\Models\GeoNamesCap.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|GeoNamesCap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GeoNamesCap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GeoNamesCap query()
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class GeoNamesCap extends \Eloquent {}
}

namespace Modules\Geo\Models{
/**
 * 
 *
 * @property array $location
 * @method static \Illuminate\Database\Eloquent\Builder|Location newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Location newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Location query()
 * @property int                             $id
 * @property string|null                     $model_type
 * @property string|null                     $model_id
 * @property string|null                     $name
 * @property string|null                     $lat
 * @property string|null                     $lng
 * @property string|null                     $street
 * @property string|null                     $city
 * @property string|null                     $state
 * @property string|null                     $zip
 * @property string|null                     $formatted_address
 * @property string|null                     $description
 * @property bool|null                       $processed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property string|null                     $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereFormattedAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereProcessed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereZip($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Location extends \Eloquent {}
}

namespace Modules\Geo\Models{
/**
 * Modules\Geo\Models\Place.
 *
 * @property int             $id
 * @property string|null     $post_type
 * @property int|null        $post_id
 * @property string|null     $formatted_address
 * @property string|null     $latitude
 * @property string|null     $longitude
 * @property string|null     $premise
 * @property string|null     $premise_short
 * @property string|null     $locality
 * @property string|null     $locality_short
 * @property string|null     $postal_town
 * @property string|null     $postal_town_short
 * @property string|null     $administrative_area_level_3
 * @property string|null     $administrative_area_level_3_short
 * @property string|null     $administrative_area_level_2
 * @property string|null     $administrative_area_level_2_short
 * @property string|null     $administrative_area_level_1
 * @property string|null     $administrative_area_level_1_short
 * @property string|null     $country
 * @property string|null     $country_short
 * @property string|null     $street_number
 * @property string|null     $street_number_short
 * @property string|null     $route
 * @property string|null     $route_short
 * @property string|null     $postal_code
 * @property string|null     $postal_code_short
 * @property string|null     $googleplace_url
 * @property string|null     $googleplace_url_short
 * @property string|null     $point_of_interest
 * @property string|null     $point_of_interest_short
 * @property string|null     $political
 * @property string|null     $political_short
 * @property string|null     $campground
 * @property string|null     $campground_short
 * @property string|null     $nearest_street
 * @property string|null     $created_by
 * @property string|null     $updated_by
 * @property string|null     $deleted_by
 * @property Carbon|null     $created_at
 * @property Carbon|null     $updated_at
 * @property string          $value
 * @property Model|\Eloquent $linked
 * @property mixed           $address
 * @property mixed           $latlng
 * @method static \Modules\Geo\Database\Factories\PlaceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                query()
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereAdministrativeAreaLevel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereAdministrativeAreaLevel1Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereAdministrativeAreaLevel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereAdministrativeAreaLevel2Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereAdministrativeAreaLevel3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereAdministrativeAreaLevel3Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereCampground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereCampgroundShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereCountryShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereFormattedAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereGoogleplaceUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereGoogleplaceUrlShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereLocality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereLocalityShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereNearestStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                wherePointOfInterest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                wherePointOfInterestShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                wherePolitical($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                wherePoliticalShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                wherePostalCodeShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                wherePostalTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                wherePostalTownShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                wherePremise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                wherePremiseShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereRouteShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereStreetNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereStreetNumberShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place                                whereUpdatedBy($value)
 * @property string|null $model_type
 * @property int|null    $model_id
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereModelType($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Place extends \Eloquent {}
}

namespace Modules\Geo\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder|State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State query()
 * @mixin \Eloquent
 */
	class State extends \Eloquent {}
}

namespace Modules\Job\Models{
/**
 * 
 *
 * @method static \Modules\Job\Database\Factories\ExportFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Export                                newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Export                                newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Export                                query()
 * @property int                             $id
 * @property \Illuminate\Support\Carbon|null $completed_at
 * @property string                          $file_disk
 * @property string|null                     $file_name
 * @property string                          $exporter
 * @property int                             $processed_rows
 * @property int                             $total_rows
 * @property int                             $successful_rows
 * @property string|null                     $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property string|null                     $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereExporter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereFileDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereProcessedRows($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereSuccessfulRows($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereTotalRows($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereUserId($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Export extends \Eloquent {}
}

namespace Modules\Job\Models{
/**
 * 
 *
 * @method static \Modules\Job\Database\Factories\FailedImportRowFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow                                newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow                                newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow                                query()
 * @property int                             $id
 * @property array                           $data
 * @property int                             $import_id
 * @property string|null                     $validation_error
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereImportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereValidationError($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class FailedImportRow extends \Eloquent {}
}

namespace Modules\Job\Models{
/**
 * Modules\Job\Models\FailedJob.
 *
 * @method static \Modules\Job\Database\Factories\FailedJobFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob                                newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob                                newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob                                query()
 * @property int    $id
 * @property string $uuid
 * @property string $connection
 * @property string $queue
 * @property array  $payload
 * @property string $exception
 * @property string $failed_at
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob whereConnection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob whereException($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob whereFailedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob whereQueue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob whereUuid($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class FailedJob extends \Eloquent {}
}

namespace Modules\Job\Models{
/**
 * Modules\Job\Models\Frequency.
 *
 * @property int                                            $id
 * @property int                                            $task_id
 * @property string                                         $label
 * @property string                                         $interval
 * @property string|null                                    $created_by
 * @property string|null                                    $updated_by
 * @property Carbon|null                                    $created_at
 * @property Carbon|null                                    $updated_at
 * @property Collection<int, \Modules\Job\Models\Parameter> $parameters
 * @property int|null                                       $parameters_count
 * @property Task|null                                      $task
 * @method static \Modules\Job\Database\Factories\FrequencyFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency                                newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency                                newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency                                query()
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency                                whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency                                whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency                                whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency                                whereInterval($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency                                whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency                                whereTaskId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency                                whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency                                whereUpdatedBy($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Frequency extends \Eloquent {}
}

namespace Modules\Job\Models{
/**
 * 
 *
 * @method static \Modules\Job\Database\Factories\ImportFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Import                                newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Import                                newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Import                                query()
 * @property int                             $id
 * @property \Illuminate\Support\Carbon|null $completed_at
 * @property string                          $file_name
 * @property string                          $file_path
 * @property string                          $importer
 * @property int                             $processed_rows
 * @property int                             $total_rows
 * @property int                             $successful_rows
 * @property string|null                     $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property string|null                     $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereFilePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereImporter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereProcessedRows($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereSuccessfulRows($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereTotalRows($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereUserId($value)
 * @property string|null $user_type
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereUserType($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Import extends \Eloquent {}
}

namespace Modules\Job\Models{
/**
 * Modules\Job\Models\Job.
 *
 * @property int         $id
 * @property string      $queue
 * @property array       $payload
 * @property int         $attempts
 * @property int|null    $reserved_at
 * @property int         $available_at
 * @property Carbon      $created_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property Carbon|null $updated_at
 * @method static \Modules\Job\Database\Factories\JobFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Job                                newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job                                newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job                                query()
 * @method static \Illuminate\Database\Eloquent\Builder|Job                                whereAttempts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job                                whereAvailableAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job                                whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job                                whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job                                whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job                                wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job                                whereQueue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job                                whereReservedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job                                whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job                                whereUpdatedBy($value)
 * @property mixed $display_name
 * @property mixed $status
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Job extends \Eloquent {}
}

namespace Modules\Job\Models{
/**
 * Modules\Job\Models\JobBatch.
 *
 * @property string          $id
 * @property string          $name
 * @property int             $total_jobs
 * @property int             $pending_jobs
 * @property int             $failed_jobs
 * @property string          $failed_job_ids
 * @property Collection|null $options
 * @property Carbon|null     $cancelled_at
 * @property Carbon          $created_at
 * @property Carbon|null     $finished_at
 * @method static \Modules\Job\Database\Factories\JobBatchFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch                                newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch                                newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch                                query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch                                whereCancelledAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch                                whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch                                whereFailedJobIds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch                                whereFailedJobs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch                                whereFinishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch                                whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch                                whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch                                whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch                                wherePendingJobs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBatch                                whereTotalJobs($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class JobBatch extends \Eloquent {}
}

namespace Modules\Job\Models{
/**
 * Modules\Job\Models\JobManager.
 *
 * @property string          $id
 * @property string          $name
 * @property bool            $failed
 * @property int             $total_jobs
 * @property int             $pending_jobs
 * @property int             $failed_jobs
 * @property string          $failed_job_ids
 * @property Collection|null $options
 * @property Carbon|null     $cancelled_at
 * @property Carbon          $created_at
 * @property Carbon|null     $finished_at
 * @method static \Modules\Job\Database\Factories\JobManagerFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager  newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager  newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager  query()
 * @property mixed                           $status
 * @property string                          $job_id
 * @property string|null                     $queue
 * @property \Illuminate\Support\Carbon|null $started_at
 * @property int                             $attempt
 * @property int|null                        $progress
 * @property string|null                     $exception_message
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereAttempt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereExceptionMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereFailed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereFinishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereQueue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class JobManager extends \Eloquent {}
}

namespace Modules\Job\Models{
/**
 * Modules\Job\Models\JobsWaiting.
 *
 * @property int                             $id
 * @property string                          $queue
 * @property array                           $payload
 * @property int                             $attempts
 * @property int|null                        $reserved_at
 * @property int                             $available_at
 * @property \Illuminate\Support\Carbon      $created_at
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property mixed                           $display_name
 * @method static \Modules\Job\Database\Factories\JobsWaitingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting  newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting  newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting  query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting  whereAttempts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting  whereAvailableAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting  whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting  whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting  whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting  wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting  whereQueue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting  whereReservedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting  whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting  whereUpdatedBy($value)
 * @property mixed $status
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class JobsWaiting extends \Eloquent {}
}

namespace Modules\Job\Models{
/**
 * Modules\Job\Models\Parameter.
 *
 * @property int            $id
 * @property int            $frequency_id
 * @property string         $name
 * @property string         $value
 * @property string|null    $created_by
 * @property string|null    $updated_by
 * @property Carbon|null    $created_at
 * @property Carbon|null    $updated_at
 * @property Frequency|null $task
 * @method static \Modules\Job\Database\Factories\ParameterFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter                                newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter                                newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter                                query()
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter                                whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter                                whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter                                whereFrequencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter                                whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter                                whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter                                whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter                                whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter                                whereValue($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Parameter extends \Eloquent {}
}

namespace Modules\Job\Models{
/**
 * Modules\Job\Models\Result.
 *
 * @property int         $id
 * @property int         $task_id
 * @property Carbon      $ran_at
 * @property string      $duration
 * @property string      $result
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Task|null   $task
 * @method static \Illuminate\Database\Eloquent\Builder|Result newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Result newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Result query()
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereRanAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereResult($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereTaskId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereUpdatedBy($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Result extends \Eloquent {}
}

namespace Modules\Job\Models{
/**
 * Modules\Job\Models\Result.
 *
 * @property Status                                                                             $status
 * @property array                                                                              $options
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Job\Models\ScheduleHistory> $histories
 * @property int|null                                                                           $histories_count
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule                                active()
 * @method static \Modules\Job\Database\Factories\ScheduleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule                                inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule                                newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule                                newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule                                onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule                                query()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule                                withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule                                withoutTrashed()
 * @property int                             $id
 * @property string                          $command
 * @property string|null                     $command_custom
 * @property array|null                      $params
 * @property string                          $expression
 * @property array|null                      $environments
 * @property array|null                      $options_with_value
 * @property string|null                     $log_filename
 * @property int                             $even_in_maintenance_mode
 * @property int                             $without_overlapping
 * @property int                             $on_one_server
 * @property string|null                     $webhook_before
 * @property string|null                     $webhook_after
 * @property string|null                     $email_output
 * @property int                             $sendmail_error
 * @property int                             $log_success
 * @property int                             $log_error
 * @property int                             $run_in_background
 * @property int                             $sendmail_success
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property string|null                     $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereCommand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereCommandCustom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereEmailOutput($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereEnvironments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereEvenInMaintenanceMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereExpression($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereLogError($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereLogFilename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereLogSuccess($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereOnOneServer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereOptionsWithValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereParams($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereRunInBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereSendmailError($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereSendmailSuccess($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereWebhookAfter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereWebhookBefore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereWithoutOverlapping($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Schedule extends \Eloquent {}
}

namespace Modules\Job\Models{
/**
 * Modules\Job\Models\ScheduleHistory.
 *
 * @property Schedule|null $command
 * @method static \Modules\Job\Database\Factories\ScheduleHistoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory  newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory  newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory  query()
 * @property int                             $id
 * @property array|null                      $params
 * @property string                          $output
 * @property array|null                      $options
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null                        $schedule_id
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property string|null                     $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereCommand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereOutput($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereParams($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereScheduleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereUpdatedBy($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class ScheduleHistory extends \Eloquent {}
}

namespace Modules\Job\Models{
/**
 * Modules\Job\Models\Task.
 *
 * @property int                                                       $id
 * @property string                                                    $description
 * @property string                                                    $command
 * @property string|null                                               $parameters
 * @property string|null                                               $expression
 * @property string                                                    $timezone
 * @property int                                                       $is_active
 * @property int                                                       $dont_overlap
 * @property int                                                       $run_in_maintenance
 * @property string|null                                               $notification_email_address
 * @property string|null                                               $notification_phone_number
 * @property string                                                    $notification_slack_webhook
 * @property int                                                       $auto_cleanup_num
 * @property string|null                                               $auto_cleanup_type
 * @property int                                                       $run_on_one_server
 * @property int                                                       $run_in_background
 * @property string|null                                               $created_by
 * @property string|null                                               $updated_by
 * @property \Illuminate\Support\Carbon|null                           $created_at
 * @property \Illuminate\Support\Carbon|null                           $updated_at
 * @property Collection<int, \Modules\Job\Models\Frequency>            $frequencies
 * @property int|null                                                  $frequencies_count
 * @property bool                                                      $activated
 * @property float                                                     $average_runtime
 * @property Result|null                                               $last_result
 * @property string                                                    $upcoming
 * @property DatabaseNotificationCollection<int, DatabaseNotification> $notifications
 * @property int|null                                                  $notifications_count
 * @property Collection<int, \Modules\Job\Models\Result>               $results
 * @property int|null                                                  $results_count
 * @method static \Illuminate\Database\Eloquent\Builder|Task newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Task newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Task query()
 * @method static \Illuminate\Database\Eloquent\Builder|Task sortableBy(array $sortableColumns, array $defaultSort = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereAutoCleanupNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereAutoCleanupType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereCommand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereDontOverlap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereExpression($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereNotificationEmailAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereNotificationPhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereNotificationSlackWebhook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereParameters($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereRunInBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereRunInMaintenance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereRunOnOneServer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTimezone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereUpdatedBy($value)
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereDeletedBy($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Task extends \Eloquent {}
}

namespace Modules\Lang\Models{
/**
 * Modules\Lang\Models\Post.
 *
 * @property int             $id
 * @property int|null        $user_id
 * @property string|null     $post_type
 * @property int|null        $post_id
 * @property string|null     $lang
 * @property string|null     $title
 * @property string|null     $subtitle
 * @property string|null     $guid
 * @property string|null     $txt
 * @property string|null     $image_src
 * @property string|null     $image_alt
 * @property string|null     $image_title
 * @property string|null     $meta_description
 * @property string|null     $meta_keywords
 * @property int|null        $author_id
 * @property Carbon|null     $created_at
 * @property Carbon|null     $updated_at
 * @property int|null        $category_id
 * @property string|null     $image
 * @property string|null     $content
 * @property int|null        $published
 * @property string|null     $created_by
 * @property string|null     $updated_by
 * @property string|null     $url
 * @property array|null      $url_lang
 * @property array|null      $image_resize_src
 * @property string|null     $linked_count
 * @property string|null     $related_count
 * @property string|null     $relatedrev_count
 * @property string|null     $linkable_type
 * @property int|null        $views_count
 * @property Model|\Eloquent $linkable
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImageAlt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImageResizeSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImageSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImageTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereLinkableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereLinkedCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereRelatedCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereRelatedrevCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTxt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUrlLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereViewsCount($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Post extends \Eloquent {}
}

namespace Modules\Lang\Models{
/**
 * Modules\Lang\Models\Translation.
 *
 * @property int         $id
 * @property string|null $lang
 * @property string|null $key
 * @property string|null $value
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string      $namespace
 * @property string      $group
 * @property string|null $item
 * @method static \Illuminate\Database\Eloquent\Builder|Translation                                 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Translation                                 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Translation                                 ofTranslatedGroup(string $group)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation                                 orderByGroupKeys(bool $ordered)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation                                 query()
 * @method static \Illuminate\Database\Eloquent\Builder|Translation                                 selectDistinctGroup()
 * @method static \Illuminate\Database\Eloquent\Builder|Translation                                 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation                                 whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation                                 whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation                                 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation                                 whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation                                 whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation                                 whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation                                 whereNamespace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation                                 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation                                 whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation                                 whereValue($value)
 * @method static \Modules\Lang\Database\Factories\TranslationFactory factory($count = null, $state = [])
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Translation extends \Eloquent {}
}

namespace Modules\Media\Models{
/**
 * Modules\Media\Models\Media.
 *
 * @property int $id
 * @property string $model_type
 * @property string $model_id
 * @property string|null $uuid
 * @property string $collection_name
 * @property string $name
 * @property string $file_name
 * @property string|null $mime_type
 * @property string $disk
 * @property string|null $conversions_disk
 * @property int $size
 * @property array|null $manipulations
 * @property array|null $custom_properties
 * @property array|null $generated_conversions
 * @property array|null $responsive_images
 * @property int|null $order_column
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property int|null $user_id
 * @property string $directory
 * @property string|null $path
 * @property int|null $width
 * @property int|null $height
 * @property string|null $type
 * @property string|null $ext
 * @property string|null $alt
 * @property string|null $title
 * @property string|null $description
 * @property string|null $caption
 * @property string|null $exif
 * @property string|null $curations
 * @property \Modules\Xot\Contracts\UserContract|null $creator
 * @property \Illuminate\Database\Eloquent\Model|\Eloquent $model
 * @property TemporaryUpload|null $temporaryUpload
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Media newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|Media query()
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereAlt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereCaption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereCollectionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereConversionsDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereCurations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereCustomProperties($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereDirectory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereExif($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereGeneratedConversions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereManipulations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereMimeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereResponsiveImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereWidth($value)
 * @property mixed $extension
 * @property mixed $human_readable_size
 * @property mixed $original_url
 * @property mixed $preview_url
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @property string|null $deleted_at
 * @property string|null $deleted_by
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereDeletedBy($value)
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @property array $entry_conversions
 * @property EloquentCollection<int, \Modules\Media\Models\MediaConvert> $mediaConverts
 * @property int|null $media_converts_count
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 */
	class Media extends \Eloquent {}
}

namespace Modules\Media\Models{
/**
 * 
 *
 * @property int $id
 * @property int $media_id
 * @property string|null $codec_video
 * @property string|null $codec_audio
 * @property string|null $preset
 * @property string|null $bitrate
 * @property int|null $width
 * @property int|null $height
 * @property int|null $threads
 * @property int|null $speed
 * @property string|null $percentage
 * @property string|null $remaining
 * @property string|null $rate
 * @property string|null $execution_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @property string|null $format
 * @property string|null $converted_file
 * @property string|null $disk
 * @property string|null $file
 * @property Media|null $media
 * @method static \Modules\Media\Database\Factories\MediaConvertFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert query()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereBitrate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereCodecAudio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereCodecVideo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereExecutionTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereFormat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereMediaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert wherePercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert wherePreset($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereRemaining($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereThreads($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereWidth($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class MediaConvert extends \Eloquent {}
}

namespace Modules\Media\Models{
/**
 * Modules\Media\Models\TemporaryUpload.
 *
 * @property int $id
 * @property string $session_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, Media> $media
 * @property int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|TemporaryUpload newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TemporaryUpload newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TemporaryUpload query()
 * @method static \Illuminate\Database\Eloquent\Builder|TemporaryUpload whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TemporaryUpload whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TemporaryUpload whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TemporaryUpload whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class TemporaryUpload extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Modules\Notify\Models{
/**
 * Modules\Notify\Models\Contact.
 *
 * @property int $id
 * @property string $model_type
 * @property string $model_id
 * @property string|null $contact_type
 * @property string|null $value
 * @property string|null $user_id
 * @property string|null $verified_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property string|null $token
 * @property string|null $sms_sent_at
 * @property int|null $sms_count
 * @property string|null $mail_sent_at
 * @property int|null $mail_count
 * @property string|null $survey_pdf_id
 * @property string|null $token
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $attribute_1
 * @property string|null $attribute_2
 * @property string|null $attribute_3
 * @property string|null $attribute_4
 * @property string|null $attribute_5
 * @property string|null $attribute_6
 * @property string|null $attribute_7
 * @property string|null $attribute_8
 * @property string|null $attribute_9
 * @property string|null $attribute_10
 * @property string|null $attribute_11
 * @property string|null $attribute_12
 * @property string|null $attribute_13
 * @property string|null $attribute_14
 * @property string|null $usesleft
 * @property string|null $sms_status_code
 * @property string|null $sms_status_txt
 * @property int|null $duplicate_count
 * @property int|null $order_column
 * @method static \Modules\Notify\Database\Factories\ContactFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereContactType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMailCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMailSentAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMobilePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSmsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSmsSentAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSmsStatusCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSmsStatusTxt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSurveyPdfId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereVerifiedAt($value)
 * @mixin Eloquent
 * @property string|null $email
 * @property string|null $mobile_phone
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute13($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute14($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereDuplicateCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUsesleft($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Contact extends \Eloquent {}
}

namespace Modules\Notify\Models{
/**
 * Modules\Notify\Models\Notification.
 *
 * @property string          $id
 * @property string          $type
 * @property string          $notifiable_type
 * @property int             $notifiable_id
 * @property array           $data
 * @property Carbon|null     $read_at
 * @property Carbon|null     $created_at
 * @property string|null     $created_by
 * @property Carbon|null     $updated_at
 * @property string|null     $updated_by
 * @property Model|\Eloquent $notifiable
 * @method static DatabaseNotificationCollection<int, static>        all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static>        get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification query()
 * @method static \Illuminate\Database\Eloquent\Builder|DatabaseNotification                       read()
 * @method static \Illuminate\Database\Eloquent\Builder|DatabaseNotification                       unread()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereNotifiableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereNotifiableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereReadAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUpdatedBy($value)
 * @method static DatabaseNotificationCollection<int, static>        all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static>        get($columns = ['*'])
 * @mixin Eloquent
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @mixin \Eloquent
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> get($columns = ['*'])
 */
	class Notification extends \Eloquent {}
}

namespace Modules\Notify\Models{
/**
 * Modules\Notify\Models\NotifyTheme.
 *
 * @property int $id
 * @property string|null $lang
 * @property string|null $type
 * @property string|null $subject
 * @property string|null $body
 * @property string|null $from
 * @property Carbon|null $created_at
 * @property string|null $created_by
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $post_type
 * @property int|null $post_id
 * @property string|null $body_html
 * @property string|null $theme
 * @property string|null $from_email
 * @property string|null $logo_src
 * @property int|null $logo_width
 * @property int|null $logo_height
 * @property array $view_params
 * @property array $logo
 * @property Model|\Eloquent $linkable
 * @property MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property int|null $media_count
 * @method static \Modules\Notify\Database\Factories\NotifyThemeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme query()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereBodyHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereFromEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereLogoHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereLogoSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereLogoWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereViewParams($value)
 * @mixin Eloquent
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class NotifyTheme extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Modules\Notify\Models{
/**
 * Modules\Notify\Models\NotifyThemeable.
 *
 * @property int $id
 * @property string|null $model_type
 * @property int|null $model_id
 * @property Carbon|null $created_at
 * @property string|null $created_by
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property int|null $notify_theme_id
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable query()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereNotifyThemeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereUpdatedBy($value)
 * @mixin Eloquent
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class NotifyThemeable extends \Eloquent {}
}

namespace Modules\Rating\Models{
/**
 * Modules\Rating\Models\Rating.
 *
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes $extra_attributes
 * @property RuleEnum                                          $rule
 * @method static \Illuminate\Database\Eloquent\Builder|Rating newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rating newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rating query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rating withExtraAttributes()
 * @property int                                           $id
 * @property string|null                                   $related_type
 * @property string|null                                   $created_by
 * @property string|null                                   $updated_by
 * @property string|null                                   $deleted_by
 * @property \Illuminate\Support\Carbon|null               $created_at
 * @property \Illuminate\Support\Carbon|null               $updated_at
 * @property int|null                                      $post_id
 * @property string|null                                   $title
 * @property string|null                                   $color
 * @property string|null                                   $icon
 * @property string|null                                   $txt
 * @property bool|null                                     $is_disabled
 * @property bool|null                                     $is_readonly
 * @property int|null                                      $order_column
 * @property \Illuminate\Database\Eloquent\Model|\Eloquent $linkedTo
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereIsDisabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereIsReadonly($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereRule($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereTxt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereUpdatedBy($value)
 * @property \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property int|null                                                                                                   $media_count
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Rating extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Modules\Rating\Models{
/**
 * Modules\Rating\Models\RatingMorph.
 *
 * @property int                             $id
 * @property bool                            $is_winner
 * @property string|null                     $post_type
 * @property int|null                        $post_id
 * @property string|null                     $related_type
 * @property int|null                        $related_id
 * @property Rating|null                     $rating
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property string|null                     $deleted_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null                        $auth_user_id
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph query()
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph whereRelatedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph whereUpdatedBy($value)
 * @property string|null $user_id
 * @property string|null $model_type
 * @property int|null    $model_id
 * @property int         $rating_id
 * @property int|null    $value
 * @property string|null $note
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph whereIsWinner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph whereRatingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph whereValue($value)
 * @property \Illuminate\Database\Eloquent\Model|\Eloquent $model
 * @property \Modules\Blog\Models\Profile|null             $profile
 * @property \Modules\User\Models\User|null                $user
 * @property string                                        $reward
 * @method static \Illuminate\Database\Eloquent\Builder|RatingMorph whereReward($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class RatingMorph extends \Eloquent {}
}

namespace Modules\Setting\Models{
/**
 * 
 *
 * @property int|null    $id
 * @property string|null $name
 * @property string|null $driver
 * @property string|null $database
 * @method static \Illuminate\Database\Eloquent\Builder|DatabaseConnection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DatabaseConnection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DatabaseConnection query()
 * @method static \Illuminate\Database\Eloquent\Builder|DatabaseConnection whereDatabase($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DatabaseConnection whereDriver($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DatabaseConnection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DatabaseConnection whereName($value)
 * @mixin \Eloquent
 */
	class DatabaseConnection extends \Eloquent {}
}

namespace Modules\Setting\Models{
/**
 * 
 *
 * @property int                                                                                                        $id
 * @property string                                                                                                     $group
 * @property string                                                                                                     $name
 * @property int                                                                                                        $locked
 * @property string                                                                                                     $payload
 * @property \Illuminate\Support\Carbon|null                                                                            $created_at
 * @property \Illuminate\Support\Carbon|null                                                                            $updated_at
 * @property \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property int|null                                                                                                   $media_count
 * @method static \Modules\Setting\Database\Factories\SettingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Setting      newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting      newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting      query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting      whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting      whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting      whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting      whereLocked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting      whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting      wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting      whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Setting extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Modules\Tenant\Models{
/**
 * 
 *
 * @property int|null $id
 * @property string|null $name
 * @method static \Illuminate\Database\Eloquent\Builder|Domain newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Domain newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Domain query()
 * @method static \Illuminate\Database\Eloquent\Builder|Domain whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domain whereName($value)
 * @mixin \Eloquent
 */
	class Domain extends \Eloquent {}
}

namespace Modules\Fixcity\Models{
/**
 * 
 *
 * @method static \Modules\Fixcity\Database\Factories\ActivityFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Activity     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity     onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity     query()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity     withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity     withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Activity extends \Eloquent {}
}

namespace Modules\Fixcity\Models{
/**
 * 
 *
 * @property int                                                                          $id
 * @property int|null                                                                     $parent_id
 * @property int                                                                          $project_id
 * @property string                                                                       $name
 * @property \Illuminate\Support\Carbon                                                   $starts_at
 * @property \Illuminate\Support\Carbon                                                   $ends_at
 * @property \Illuminate\Support\Carbon|null                                              $created_at
 * @property \Illuminate\Support\Carbon|null                                              $updated_at
 * @property string|null                                                                  $updated_by
 * @property string|null                                                                  $created_by
 * @property \Illuminate\Support\Carbon|null                                              $deleted_at
 * @property string|null                                                                  $deleted_by
 * @property Epic|null                                                                    $parent
 * @property Project|null                                                                 $project
 * @property Sprint|null                                                                  $sprint
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Fixcity\Models\Ticket> $tickets
 * @property int|null                                                                     $tickets_count
 * @method static \Modules\Fixcity\Database\Factories\EpicFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Epic     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Epic     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Epic     onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Epic     query()
 * @method static \Illuminate\Database\Eloquent\Builder|Epic     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Epic     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Epic     whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Epic     whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Epic     whereEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Epic     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Epic     whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Epic     whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Epic     whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Epic     whereStartsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Epic     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Epic     whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Epic     withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Epic     withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Epic extends \Eloquent {}
}

namespace Modules\Fixcity\Models{
/**
 * 
 *
 * @property int                                                                                                        $id
 * @property string                                                                                                     $name
 * @property string                                                                                                     $content
 * @property int                                                                                                        $owner_id
 * @property int|null                                                                                                   $responsible_id
 * @property int                                                                                                        $status_id
 * @property string|null                                                                                                $code
 * @property string|null                                                                                                $ticket_prefix
 * @property int                                                                                                        $order
 * @property int                                                                                                        $priority_id
 * @property int|null                                                                                                   $project_id
 * @property float|null                                                                                                 $estimation
 * @property int|null                                                                                                   $epic_id
 * @property int|null                                                                                                   $sprint_id
 * @property \Illuminate\Support\Carbon|null                                                                            $deleted_at
 * @property \Illuminate\Support\Carbon|null                                                                            $created_at
 * @property \Illuminate\Support\Carbon|null                                                                            $updated_at
 * @property int|null                                                                                                   $type_id
 * @property string|null                                                                                                $latitude
 * @property string|null                                                                                                $longitude
 * @property string|null                                                                                                $updated_by
 * @property string|null                                                                                                $created_by
 * @property string|null                                                                                                $deleted_by
 * @property TicketStatusEnum                                                                                        $status
 * @property TicketPriority|null                                                                                        $priority
 * @property TicketType|null                                                                                            $type
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Fixcity\Models\TicketActivity>                       $activities
 * @property int|null                                                                                                   $activities_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Fixcity\Models\TicketComment>                        $comments
 * @property int|null                                                                                                   $comments_count
 * @property mixed                                                                                                      $completude_percentage
 * @property Epic|null                                                                                                  $epic
 * @property mixed                                                                                                      $estimation_for_humans
 * @property int|null                                                                                                   $estimation_in_seconds
 * @property float                                                                                                      $estimation_progress
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Fixcity\Models\TicketHour>                           $hours
 * @property int|null                                                                                                   $hours_count
 * @property \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property int|null                                                                                                   $media_count
 * @property \Modules\User\Models\User|null                                                                             $owner
 * @property Project|null                                                                                               $project
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Fixcity\Models\TicketRelation>                       $relations
 * @property int|null                                                                                                   $relations_count
 * @property \Modules\User\Models\User|null                                                                             $responsible
 * @property Sprint|null                                                                                                $sprint
 * @property Sprint|null                                                                                                $sprints
 * @property \Illuminate\Database\Eloquent\Collection<int, \Spatie\ModelStatus\Status>                                  $statuses
 * @property int|null                                                                                                   $statuses_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\User>                                   $subscribers
 * @property int|null                                                                                                   $subscribers_count
 * @property mixed                                                                                                      $total_logged_hours
 * @property mixed                                                                                                      $total_logged_in_hours
 * @property mixed                                                                                                      $total_logged_seconds
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     currentStatus(...$names)
 * @method static \Modules\Fixcity\Database\Factories\TicketFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     otherCurrentStatus(...$names)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereEpicId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereEstimation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     wherePriorityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereResponsibleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereSprintId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereTicketPrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     withoutTrashed()
 * @mixin \Eloquent
 * @property string|null $slug
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereType($value)
 */
	class Ticket extends \Eloquent {}
}

namespace Modules\Fixcity\Models{
/**
 * Modules\Fixcity\Models\Profile.
 *
 * @property Collection<int, Customer>   $customers
 * @property int|null                    $customers_count
 * @property string|null                 $full_name
 * @property Collection<int, Permission> $permissions
 * @property int|null                    $permissions_count
 * @property Collection<int, Role>       $roles
 * @property int|null                    $roles_count
 * @property \Modules\Xot\Contracts\UserContract|null                   $user
 * @method static CachedBuilder|Profile   all($columns = [])
 * @method static CachedBuilder|Profile   avg($column)
 * @method static CachedBuilder|Profile   cache(array $tags = [])
 * @method static CachedBuilder|Profile   cachedValue(array $arguments, string $cacheKey)
 * @method static CachedBuilder|Profile   count($columns = '*')
 * @method static CachedBuilder|BaseModel disableCache()
 * @method static CachedBuilder|Profile   disableModelCaching()
 * @method static CachedBuilder|Profile   exists()
 * @method static CachedBuilder|Profile   flushCache(array $tags = [])
 * @method static CachedBuilder|Profile   getModelCacheCooldown(Model $instance)
 * @method static CachedBuilder|Profile   inRandomOrder($seed = '')
 * @method static CachedBuilder|Profile   insert(array $values)
 * @method static CachedBuilder|Profile   isCachable()
 * @method static CachedBuilder|Profile   max($column)
 * @method static CachedBuilder|Profile   min($column)
 * @method static CachedBuilder|Profile   newModelQuery()
 * @method static CachedBuilder|Profile   newQuery()
 * @method static CachedBuilder|Profile   permission($permissions)
 * @method static CachedBuilder|Profile   query()
 * @method static CachedBuilder|Profile   role($roles, $guard = null)
 * @method static CachedBuilder|Profile   sum($column)
 * @method static CachedBuilder|Profile   truncate()
 * @method static CachedBuilder|BaseModel withCacheCooldownSeconds(?int $seconds = null)
 * @property int         $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUpdatedBy($value)
 * @property Collection<int, Project>                                                                                      $favoriteProjects
 * @property int|null                                                                                                      $favorite_projects_count
 * @property Collection<int, TicketHour>                                                                                   $hours
 * @property int|null                                                                                                      $hours_count
 * @property Collection<int, Project>                                                                                      $projectsAffected
 * @property int|null                                                                                                      $projects_affected_count
 * @property Collection<int, Project>                                                                                      $projectsOwning
 * @property int|null                                                                                                      $projects_owning_count
 * @property Collection<int, SocialiteUser>                                                                                $socials
 * @property int|null                                                                                                      $socials_count
 * @property Collection<int, Ticket>                                                                                       $ticketsOwned
 * @property int|null                                                                                                      $tickets_owned_count
 * @property Collection<int, Ticket>                                                                                       $ticketsResponsible
 * @property int|null                                                                                                      $tickets_responsible_count
 * @property mixed                                                                                                         $total_logged_in_hours
 * @property string                                                                                                        $user_id
 * @property string|null                                                                                                   $email
 * @property string                                                                                                        $credits
 * @property string|null                                                                                                   $slug
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes|null                                                        $extra
 * @property Carbon|null                                                                                                   $deleted_at
 * @property string|null                                                                                                   $deleted_by
 * @property string                                                                                                        $avatar
 * @property Collection<int, \Modules\User\Models\DeviceUser>                                                              $deviceUsers
 * @property int|null                                                                                                      $device_users_count
 * @property Collection<int, \Modules\User\Models\Device>                                                                  $devices
 * @property int|null                                                                                                      $devices_count
 * @property \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media>    $media
 * @property int|null                                                                                                      $media_count
 * @property Collection<int, \Modules\User\Models\DeviceUser>                                                              $mobileDeviceUsers
 * @property int|null                                                                                                      $mobile_device_users_count
 * @property Collection<int, \Modules\User\Models\Device>                                                                  $mobileDevices
 * @property int|null                                                                                                      $mobile_devices_count
 * @property \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property int|null                                                                                                      $notifications_count
 * @property Collection<int, \Modules\User\Models\Team>                                                                    $teams
 * @property int|null                                                                                                      $teams_count
 * @property string|null                                                                                                   $user_name
 * @method static \Modules\Fixcity\Database\Factories\ProfileFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Profile                                   whereCredits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile                                   whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile                                   whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile                                   whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile                                   whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile                                   whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile                                   whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile                               withExtraAttributes()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile                               withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile                               withoutRole($roles, $guard = null)
 * @property \Modules\User\Models\DeviceUser $pivot
 * @property \Modules\User\Models\Membership $membership
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Profile extends \Eloquent {}
}

namespace Modules\Fixcity\Models{
/**
 * Modules\Fixcity\Models\ProfileProject.
 *
 * @property Project|null $project
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileProject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileProject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileProject query()
 * @property Profile|null                    $profile
 * @property string                          $id
 * @property string|null                     $user_id
 * @property string|null                     $profile_id
 * @property int                             $project_id
 * @property string                          $role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileProject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileProject whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileProject whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileProject whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileProject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileProject whereProfileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileProject whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileProject whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileProject whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileProject whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileProject whereUserId($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class ProfileProject extends \Eloquent {}
}

namespace Modules\Fixcity\Models{
/**
 * 
 *
 * @property int                                                                                                        $id
 * @property string                                                                                                     $name
 * @property string|null                                                                                                $description
 * @property int|null                                                                                                   $owner_id
 * @property int                                                                                                        $status_id
 * @property string                                                                                                     $status_type
 * @property string                                                                                                     $type
 * @property string                                                                                                     $ticket_prefix
 * @property \Illuminate\Support\Carbon|null                                                                            $deleted_at
 * @property \Illuminate\Support\Carbon|null                                                                            $created_at
 * @property \Illuminate\Support\Carbon|null                                                                            $updated_at
 * @property string|null                                                                                                $updated_by
 * @property string|null                                                                                                $created_by
 * @property string|null                                                                                                $deleted_by
 * @property mixed                                                                                                      $contributors
 * @property mixed                                                                                                      $cover
 * @property mixed                                                                                                      $current_sprint
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Fixcity\Models\Epic>                                 $epics
 * @property int|null                                                                                                   $epics_count
 * @property mixed                                                                                                      $epics_first_date
 * @property mixed                                                                                                      $epics_last_date
 * @property \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property int|null                                                                                                   $media_count
 * @property mixed                                                                                                      $next_sprint
 * @property \Modules\User\Models\User|null                                                                             $owner
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Fixcity\Models\Sprint>                               $sprints
 * @property int|null                                                                                                   $sprints_count
 * @property ProjectStatus                                                                                              $status
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Fixcity\Models\TicketStatus>                         $statuses
 * @property int|null                                                                                                   $statuses_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Fixcity\Models\Ticket>                               $tickets
 * @property int|null                                                                                                   $tickets_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\User>                                   $users
 * @property int|null                                                                                                   $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereStatusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereTicketPrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Project withoutTrashed()
 * @mixin \Eloquent
 */
	class Project extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Modules\Fixcity\Models{
/**
 * 
 *
 * @property string                          $id
 * @property int                             $user_id
 * @property int                             $project_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @property Project|null                    $project
 * @property \Modules\User\Models\User|null  $user
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFavorite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFavorite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFavorite query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFavorite whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFavorite whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFavorite whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFavorite whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFavorite whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFavorite whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFavorite whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFavorite whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFavorite whereUserId($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class ProjectFavorite extends \Eloquent {}
}

namespace Modules\Fixcity\Models{
/**
 * 
 *
 * @property int                                                                           $id
 * @property string                                                                        $name
 * @property string                                                                        $color
 * @property int                                                                           $is_default
 * @property int|null                                                                      $project_id
 * @property \Illuminate\Support\Carbon|null                                               $deleted_at
 * @property \Illuminate\Support\Carbon|null                                               $created_at
 * @property \Illuminate\Support\Carbon|null                                               $updated_at
 * @property string|null                                                                   $updated_by
 * @property string|null                                                                   $created_by
 * @property string|null                                                                   $deleted_by
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Fixcity\Models\Project> $projects
 * @property int|null                                                                      $projects_count
 * @method static \Modules\Fixcity\Database\Factories\ProjectStatusFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus     onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus     query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus     whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus     whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus     whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus     whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus     whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus     whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus     whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus     withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus     withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class ProjectStatus extends \Eloquent {}
}

namespace Modules\Fixcity\Models{
/**
 * 
 *
 * @property string                          $id
 * @property int                             $user_id
 * @property int                             $project_id
 * @property string                          $role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @property Project|null                    $project
 * @property \Modules\User\Models\User|null  $user
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectUser whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectUser whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectUser whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectUser whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectUser whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectUser whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectUser whereUserId($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class ProjectUser extends \Eloquent {}
}

namespace Modules\Fixcity\Models{
/**
 * 
 *
 * @property int                                                                          $id
 * @property string                                                                       $name
 * @property \Illuminate\Support\Carbon                                                   $starts_at
 * @property \Illuminate\Support\Carbon                                                   $ends_at
 * @property string|null                                                                  $description
 * @property int|null                                                                     $project_id
 * @property int|null                                                                     $epic_id
 * @property \Illuminate\Support\Carbon|null                                              $started_at
 * @property \Illuminate\Support\Carbon|null                                              $ended_at
 * @property \Illuminate\Support\Carbon|null                                              $deleted_at
 * @property \Illuminate\Support\Carbon|null                                              $created_at
 * @property \Illuminate\Support\Carbon|null                                              $updated_at
 * @property string|null                                                                  $updated_by
 * @property string|null                                                                  $created_by
 * @property string|null                                                                  $deleted_by
 * @property Epic|null                                                                    $epic
 * @property Project|null                                                                 $project
 * @property mixed                                                                        $remaining
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Fixcity\Models\Ticket> $tickets
 * @property int|null                                                                     $tickets_count
 * @method static \Modules\Fixcity\Database\Factories\SprintFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Sprint     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sprint     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sprint     onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Sprint     query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sprint     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sprint     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sprint     whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sprint     whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sprint     whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sprint     whereEndedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sprint     whereEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sprint     whereEpicId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sprint     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sprint     whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sprint     whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sprint     whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sprint     whereStartsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sprint     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sprint     whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sprint     withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Sprint     withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Sprint extends \Eloquent {}
}

namespace Modules\Fixcity\Models{
/**
 * Modules\Fixcity\Models\Ticket.
 *
 * @property string                                                                                                     $name
 * @property string                                                                                                     $slug
 * @property int                                                                                                        $id
 * @property string                                                                                                     $content
 * @property int                                                                                                        $owner_id
 * @property int|null                                                                                                   $responsible_id
 * @property int                                                                                                        $status_id
 * @property string|null                                                                                                $code
 * @property string|null                                                                                                $ticket_prefix
 * @property int                                                                                                        $order
 * @property int                                                                                                        $priority_id
 * @property int|null                                                                                                   $project_id
 * @property float|null                                                                                                 $estimation
 * @property int|null                                                                                                   $epic_id
 * @property int|null                                                                                                   $sprint_id
 * @property \Illuminate\Support\Carbon|null                                                                            $deleted_at
 * @property \Illuminate\Support\Carbon|null                                                                            $created_at
 * @property \Illuminate\Support\Carbon|null                                                                            $updated_at
 * @property int|null                                                                                                   $type_id
 * @property string|null                                                                                                $latitude
 * @property string|null                                                                                                $longitude
 * @property string|null                                                                                                $updated_by
 * @property string|null                                                                                                $created_by
 * @property string|null                                                                                                $deleted_by
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Fixcity\Models\TicketActivity>                       $activities
 * @property int|null                                                                                                   $activities_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Fixcity\Models\TicketComment>                        $comments
 * @property int|null                                                                                                   $comments_count
 * @property mixed                                                                                                      $completude_percentage
 * @property Epic|null                                                                                                  $epic
 * @property mixed                                                                                                      $estimation_for_humans
 * @property mixed                                                                                                      $estimation_in_seconds
 * @property mixed                                                                                                      $estimation_progress
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Fixcity\Models\TicketHour>                           $hours
 * @property int|null                                                                                                   $hours_count
 * @property \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property int|null                                                                                                   $media_count
 * @property \Modules\User\Models\User|null                                                                             $owner
 * @property TicketPriority|null                                                                                        $priority
 * @property Project|null                                                                                               $project
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Fixcity\Models\TicketRelation>                       $relations
 * @property int|null                                                                                                   $relations_count
 * @property \Modules\User\Models\User|null                                                                             $responsible
 * @property Sprint|null                                                                                                $sprint
 * @property Sprint|null                                                                                                $sprints
 * @property TicketStatus|null                                                                                          $status
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\User>                                   $subscribers
 * @property int|null                                                                                                   $subscribers_count
 * @property mixed                                                                                                      $total_logged_hours
 * @property mixed                                                                                                      $total_logged_in_hours
 * @property mixed                                                                                                      $total_logged_seconds
 * @property TicketType|null                                                                                            $type
 * @method static \Modules\Fixcity\Database\Factories\TicketFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereEpicId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereEstimation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     wherePriorityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereResponsibleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereSprintId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereTicketPrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket     withoutTrashed()
 * @property \Illuminate\Database\Eloquent\Collection<int, \Spatie\ModelStatus\Status> $statuses
 * @property int|null                                                                  $statuses_count
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket currentStatus(...$names)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket otherCurrentStatus(...$names)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereType($value)
 */
	class Ticket extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Modules\Fixcity\Models{
/**
 * 
 *
 * @property int                             $id
 * @property int                             $ticket_id
 * @property int                             $old_status_id
 * @property int                             $new_status_id
 * @property int                             $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @property TicketStatus|null               $newStatus
 * @property TicketStatus|null               $oldStatus
 * @property Ticket|null                     $ticket
 * @property \Modules\User\Models\User|null  $user
 * @method static \Modules\Fixcity\Database\Factories\TicketActivityFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TicketActivity     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketActivity     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketActivity     onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketActivity     query()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketActivity     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketActivity     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketActivity     whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketActivity     whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketActivity     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketActivity     whereNewStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketActivity     whereOldStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketActivity     whereTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketActivity     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketActivity     whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketActivity     whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketActivity     withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketActivity     withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class TicketActivity extends \Eloquent {}
}

namespace Modules\Fixcity\Models{
/**
 * 
 *
 * @property int                             $id
 * @property int                             $ticket_id
 * @property int                             $user_id
 * @property string                          $content
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property string|null                     $deleted_by
 * @property Ticket|null                     $ticket
 * @property \Modules\User\Models\User|null  $user
 * @method static \Modules\Fixcity\Database\Factories\TicketCommentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TicketComment     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketComment     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketComment     onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketComment     query()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketComment     whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketComment     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketComment     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketComment     whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketComment     whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketComment     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketComment     whereTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketComment     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketComment     whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketComment     whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketComment     withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketComment     withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class TicketComment extends \Eloquent {}
}

namespace Modules\Fixcity\Models{
/**
 * 
 *
 * @property int                             $id
 * @property int                             $ticket_id
 * @property int                             $user_id
 * @property int|null                        $activity_id
 * @property float                           $value
 * @property string|null                     $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @property Activity|null                   $activity
 * @property mixed                           $for_humans
 * @property Ticket|null                     $ticket
 * @property \Modules\User\Models\User|null  $user
 * @method static \Modules\Fixcity\Database\Factories\TicketHourFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TicketHour     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketHour     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketHour     onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketHour     query()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketHour     whereActivityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketHour     whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketHour     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketHour     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketHour     whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketHour     whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketHour     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketHour     whereTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketHour     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketHour     whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketHour     whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketHour     whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketHour     withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketHour     withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class TicketHour extends \Eloquent {}
}

namespace Modules\Fixcity\Models{
/**
 * 
 *
 * @property int                                                                          $id
 * @property string                                                                       $name
 * @property string                                                                       $color
 * @property int                                                                          $is_default
 * @property \Illuminate\Support\Carbon|null                                              $deleted_at
 * @property \Illuminate\Support\Carbon|null                                              $created_at
 * @property \Illuminate\Support\Carbon|null                                              $updated_at
 * @property string|null                                                                  $updated_by
 * @property string|null                                                                  $created_by
 * @property string|null                                                                  $deleted_by
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Fixcity\Models\Ticket> $tickets
 * @property int|null                                                                     $tickets_count
 * @method static \Modules\Fixcity\Database\Factories\TicketPriorityFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TicketPriority     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketPriority     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketPriority     onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketPriority     query()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketPriority     whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketPriority     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketPriority     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketPriority     whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketPriority     whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketPriority     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketPriority     whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketPriority     whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketPriority     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketPriority     whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketPriority     withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketPriority     withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class TicketPriority extends \Eloquent {}
}

namespace Modules\Fixcity\Models{
/**
 * 
 *
 * @property int                             $id
 * @property int|null                        $ticket_id
 * @property int|null                        $relation_id
 * @property string                          $type
 * @property int                             $sort
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @property Ticket|null                     $relation
 * @property Ticket|null                     $ticket
 * @method static \Modules\Fixcity\Database\Factories\TicketRelationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TicketRelation     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketRelation     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketRelation     onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketRelation     query()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketRelation     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketRelation     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketRelation     whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketRelation     whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketRelation     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketRelation     whereRelationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketRelation     whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketRelation     whereTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketRelation     whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketRelation     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketRelation     whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketRelation     withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketRelation     withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class TicketRelation extends \Eloquent {}
}

namespace Modules\Fixcity\Models{
/**
 * 
 *
 * @property int                                                                          $id
 * @property string                                                                       $name
 * @property string                                                                       $color
 * @property int                                                                          $is_default
 * @property int                                                                          $order
 * @property int|null                                                                     $project_id
 * @property \Illuminate\Support\Carbon|null                                              $deleted_at
 * @property \Illuminate\Support\Carbon|null                                              $created_at
 * @property \Illuminate\Support\Carbon|null                                              $updated_at
 * @property string|null                                                                  $updated_by
 * @property string|null                                                                  $created_by
 * @property string|null                                                                  $deleted_by
 * @property Project|null                                                                 $project
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Fixcity\Models\Ticket> $tickets
 * @property int|null                                                                     $tickets_count
 * @method static \Modules\Fixcity\Database\Factories\TicketStatusFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TicketStatus     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketStatus     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketStatus     onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketStatus     query()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketStatus     whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketStatus     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketStatus     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketStatus     whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketStatus     whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketStatus     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketStatus     whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketStatus     whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketStatus     whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketStatus     whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketStatus     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketStatus     whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketStatus     withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketStatus     withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class TicketStatus extends \Eloquent {}
}

namespace Modules\Fixcity\Models{
/**
 * 
 *
 * @property int                             $id
 * @property int                             $user_id
 * @property int                             $ticket_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @property Ticket|null                     $ticket
 * @method static \Modules\Fixcity\Database\Factories\TicketSubscriberFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSubscriber     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSubscriber     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSubscriber     onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSubscriber     query()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSubscriber     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSubscriber     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSubscriber     whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSubscriber     whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSubscriber     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSubscriber     whereTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSubscriber     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSubscriber     whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSubscriber     whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSubscriber     withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSubscriber     withoutTrashed()
 * @property \Modules\User\Models\User|null $user
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class TicketSubscriber extends \Eloquent {}
}

namespace Modules\Fixcity\Models{
/**
 * 
 *
 * @property int                                                                          $id
 * @property string                                                                       $name
 * @property string                                                                       $icon
 * @property string                                                                       $color
 * @property int                                                                          $is_default
 * @property \Illuminate\Support\Carbon|null                                              $deleted_at
 * @property \Illuminate\Support\Carbon|null                                              $created_at
 * @property \Illuminate\Support\Carbon|null                                              $updated_at
 * @property string|null                                                                  $updated_by
 * @property string|null                                                                  $created_by
 * @property string|null                                                                  $deleted_by
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Fixcity\Models\Ticket> $tickets
 * @property int|null                                                                     $tickets_count
 * @method static \Modules\Fixcity\Database\Factories\TicketTypeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TicketType     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketType     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketType     onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketType     query()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketType     whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketType     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketType     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketType     whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketType     whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketType     whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketType     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketType     whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketType     whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketType     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketType     whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketType     withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketType     withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class TicketType extends \Eloquent {}
}

namespace Modules\User\Models{
/**
 * Modules\User\Models\Device.
 *
 * @property Collection<int, \Modules\User\Models\User> $users
 * @property int|null                                   $users_count
 * @method static DeviceFactory  factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Device newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Device newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Device query()
 * @property int         $id
 * @property string|null $mobile_id
 * @property array|null  $languages
 * @property string|null $device
 * @property string|null $platform
 * @property string|null $browser
 * @property string|null $version
 * @property int|null    $is_robot
 * @property string|null $robot
 * @property int|null    $is_desktop
 * @property int|null    $is_mobile
 * @property int|null    $is_tablet
 * @property int|null    $is_phone
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereBrowser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereDevice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereIsDesktop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereIsMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereIsPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereIsRobot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereIsTablet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereLanguages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereMobileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device wherePlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereRobot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereVersion($value)
 * @property DeviceUser $pivot
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Device extends \Eloquent {}
}

namespace Modules\User\Models{
/**
 * Modules\User\Models\DeviceUser.
 *
 * @property Device|null $device
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceUser query()
 * @property int         $id
 * @property string      $device_id
 * @property string      $user_id
 * @property Carbon|null $login_at
 * @property Carbon|null $logout_at
 * @property string|null $push_notifications_token
 * @property bool|null   $push_notifications_enabled
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceUser whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceUser whereDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceUser whereLoginAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceUser whereLogoutAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceUser wherePushNotificationsEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceUser wherePushNotificationsToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceUser whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceUser whereUserId($value)
 * @property ProfileContract|null $profile
 * @property \Modules\Xot\Contracts\UserContract|null            $user
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class DeviceUser extends \Eloquent {}
}

namespace Modules\User\Models{
/**
 * 
 *
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes $extra_attributes
 * @method static \Illuminate\Database\Eloquent\Builder|Extra newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Extra newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Extra query()
 * @method static \Illuminate\Database\Eloquent\Builder|Extra                               withExtraAttributes()
 * @mixin \Eloquent
 * @property int $id
 * @property string $model_type
 * @property string $model_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereExtraAttributes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereUpdatedBy($value)
 */
	class Extra extends \Eloquent {}
}

namespace Modules\User\Models{
/**
 * Modules\User\Models\Membership.
 *
 * @property string $role
 * @method static \Illuminate\Database\Eloquent\Builder|Membership newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership query()
 * @property int         $id
 * @property string      $uuid
 * @property string|null $team_id
 * @property string|null $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $customer_id
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereUuid($value)
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereDeletedBy($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Membership extends \Eloquent {}
}

namespace Modules\User\Models{
/**
 * Modules\User\Models\ModelHasPermission.
 *
 * @property int    $id
 * @property int    $permission_id
 * @property string $model_type
 * @property string $model_id
 * @method static ModelHasPermissionFactory  factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasPermission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasPermission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasPermission query()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasPermission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasPermission whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasPermission whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasPermission wherePermissionId($value)
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasPermission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasPermission whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasPermission whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasPermission whereUpdatedBy($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class ModelHasPermission extends \Eloquent {}
}

namespace Modules\User\Models{
/**
 * Modules\User\Models\ModelHasRole.
 *
 * @property int         $id
 * @property string      $role_id
 * @property string      $model_type
 * @property string      $model_id
 * @property int|null    $team_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @method static ModelHasRoleFactory  factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasRole query()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasRole whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasRole whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasRole whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasRole whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasRole whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasRole whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasRole whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasRole whereUpdatedBy($value)
 * @property string $uuid (DC2Type:guid)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelHasRole whereUuid($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class ModelHasRole extends \Eloquent {}
}

namespace Modules\User\Models{
/**
 * Modules\User\Models\OauthAccessToken.
 *
 * @property string                          $id
 * @property string|null                     $user_id
 * @property string                          $client_id
 * @property string|null                     $name
 * @property array|null                      $scopes
 * @property bool                            $revoked
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $expires_at
 * @property OauthClient|null                $client
 * @property \Modules\Xot\Contracts\UserContract|null                       $user
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken query()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken whereRevoked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken whereScopes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken whereUserId($value)
 * @property OauthRefreshToken|null $refreshToken
 * @mixin \Eloquent
 */
	class OauthAccessToken extends \Eloquent {}
}

namespace Modules\User\Models{
/**
 * Modules\User\Models\OauthAuthCode.
 *
 * @property OauthClient|null $client
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode query()
 * @property string      $id
 * @property string|null $user_id
 * @property string|null $client_id
 * @property string|null $scopes
 * @property bool        $revoked
 * @property Carbon|null $expires_at
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode whereRevoked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode whereScopes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode whereUserId($value)
 * @mixin \Eloquent
 */
	class OauthAuthCode extends \Eloquent {}
}

namespace Modules\User\Models{
/**
 * Modules\User\Models\OauthClient.
 *
 * @property string                                                                               $id
 * @property string|null                                                                          $user_id
 * @property string                                                                               $name
 * @property string|null                                                                          $secret
 * @property string|null                                                                          $provider
 * @property string                                                                               $redirect
 * @property bool                                                                                 $personal_access_client
 * @property bool                                                                                 $password_client
 * @property bool                                                                                 $revoked
 * @property \Illuminate\Support\Carbon|null                                                      $created_at
 * @property \Illuminate\Support\Carbon|null                                                      $updated_at
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\OauthAuthCode>    $authCodes
 * @property int|null                                                                             $auth_codes_count
 * @property array|null                                                                           $grant_types
 * @property string|null                                                                          $plain_secret
 * @property array|null                                                                           $scopes
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\OauthAccessToken> $tokens
 * @property int|null                                                                             $tokens_count
 * @property \Modules\Xot\Contracts\UserContract|null                                                                            $user
 * @method static \Laravel\Passport\Database\Factories\ClientFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|OauthClient  newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthClient  newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthClient  query()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthClient  whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthClient  whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthClient  whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthClient  wherePasswordClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthClient  wherePersonalAccessClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthClient  whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthClient  whereRedirect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthClient  whereRevoked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthClient  whereSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthClient  whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthClient  whereUserId($value)
 * @property string|null $updated_by
 * @property string|null $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|OauthClient whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthClient whereUpdatedBy($value)
 * @mixin \Eloquent
 */
	class OauthClient extends \Eloquent {}
}

namespace Modules\User\Models{
/**
 * Modules\User\Models\OauthPersonalAccessClient.
 *
 * @property string           $uuid
 * @property string           $client_id
 * @property Carbon|null      $created_at
 * @property Carbon|null      $updated_at
 * @property OauthClient|null $client
 * @method static \Illuminate\Database\Eloquent\Builder|OauthPersonalAccessClient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthPersonalAccessClient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthPersonalAccessClient query()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthPersonalAccessClient whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthPersonalAccessClient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthPersonalAccessClient whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthPersonalAccessClient whereUuid($value)
 * @property int $id
 * @method static \Illuminate\Database\Eloquent\Builder|OauthPersonalAccessClient whereId($value)
 * @property string|null $updated_by
 * @property string|null $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|OauthPersonalAccessClient whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthPersonalAccessClient whereUpdatedBy($value)
 * @mixin \Eloquent
 */
	class OauthPersonalAccessClient extends \Eloquent {}
}

namespace Modules\User\Models{
/**
 * Modules\User\Models\OauthRefreshToken.
 *
 * @property OauthAccessToken|null $accessToken
 * @method static \Illuminate\Database\Eloquent\Builder|OauthRefreshToken newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthRefreshToken newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthRefreshToken query()
 * @property string      $id
 * @property string      $access_token_id
 * @property bool        $revoked
 * @property Carbon|null $expires_at
 * @method static \Illuminate\Database\Eloquent\Builder|OauthRefreshToken whereAccessTokenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthRefreshToken whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthRefreshToken whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthRefreshToken whereRevoked($value)
 * @mixin \Eloquent
 */
	class OauthRefreshToken extends \Eloquent {}
}

namespace Modules\User\Models{
/**
 * Modules\User\Models\PasswordReset.
 *
 * @property int         $id
 * @property string      $email
 * @property string      $token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $user_id
 * @property string|null $updated_by
 * @property string|null $created_by
 * @method static PasswordResetFactory  factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset query()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereUserId($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class PasswordReset extends \Eloquent {}
}

namespace Modules\User\Models{
/**
 * Modules\User\Models\Permission.
 *
 * @property int                                        $id
 * @property string                                     $name
 * @property string                                     $guard_name
 * @property Carbon|null                                $created_at
 * @property Carbon|null                                $updated_at
 * @property Collection<int, Permission>                $permissions
 * @property int|null                                   $permissions_count
 * @property Collection<int, Role>                      $roles
 * @property int|null                                   $roles_count
 * @property Collection<int, \Modules\User\Models\User> $users
 * @property int|null                                   $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Permission                               newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission                               newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission                               permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission                               query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission                               role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission                               whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission                               whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission                               whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission                               whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission                               whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission withoutRole($roles, $guard = null)
 * @property string|null $updated_by
 * @property string|null $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedBy($value)
 * @mixin \Eloquent
 */
	class Permission extends \Eloquent {}
}

namespace Modules\User\Models{
/**
 * Modules\User\Models\Role.
 *
 * @property string                                           $uuid
 * @property string|null                                      $team_id
 * @property string                                           $name
 * @property string                                           $guard_name
 * @property Carbon|null                                      $created_at
 * @property Carbon|null                                      $updated_at
 * @property Collection<int, \Modules\User\Models\Permission> $permissions
 * @property int|null                                         $permissions_count
 * @property Team|null                                        $team
 * @property Collection<int, \Modules\User\Models\User>       $users
 * @property int|null                                         $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUuid($value)
 * @property int $id
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @property string|null $updated_by
 * @property string|null $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedBy($value)
 * @mixin Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|Role withoutPermission($permissions)
 * @mixin \Eloquent
 */
	class Role extends \Eloquent {}
}

namespace Modules\User\Models{
/**
 * Modules\User\Models\RoleHasPermission.
 *
 * @property int $id
 * @property int $permission_id
 * @property int $role_id
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHasPermission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHasPermission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHasPermission query()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHasPermission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHasPermission wherePermissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHasPermission whereRoleId($value)
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHasPermission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHasPermission whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHasPermission whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHasPermission whereUpdatedBy($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class RoleHasPermission extends \Eloquent {}
}

namespace Modules\User\Models{
/**
 * Modules\User\Models\SocialiteUser.
 *
 * @property int                             $id
 * @property string                          $user_id
 * @property string                          $provider
 * @property string                          $provider_id
 * @property string|null                     $token
 * @property string|null                     $name
 * @property string|null                     $email
 * @property string|null                     $avatar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Modules\Xot\Contracts\UserContract|null                       $user
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteUser whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteUser whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteUser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteUser whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteUser whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteUser whereProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteUser whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteUser whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteUser whereUserId($value)
 * @property string $uuid (DC2Type:guid)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteUser whereUuid($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class SocialiteUser extends \Eloquent {}
}

namespace Modules\User\Models{
/**
 * Modules\User\Models\Team.
 *
 * @property int                                                                                $id
 * @property int                                                                                $user_id
 * @property string                                                                             $name
 * @property int                                                                                $personal_team
 * @property \Illuminate\Support\Carbon|null                                                    $created_at
 * @property \Illuminate\Support\Carbon|null                                                    $updated_at
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\User>           $members
 * @property int|null                                                                           $members_count
 * @property \Modules\Xot\Contracts\UserContract|null                                                                          $owner
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\TeamInvitation> $teamInvitations
 * @property int|null                                                                           $team_invitations_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\User>           $users
 * @property int|null                                                                           $users_count
 * @method static \Modules\User\Database\Factories\TeamFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Team   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Team   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team   whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team   wherePersonalTeam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team   whereUserId($value)
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUpdatedBy($value)
 * @property Membership $membership
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Team extends \Eloquent implements \Modules\User\Contracts\TeamContract, \Modules\User\Contracts\ModelContract {}
}

namespace Modules\User\Models{
/**
 * Modules\User\Models\TeamInvitation.
 *
 * @property int               $id
 * @property string|null       $team_id
 * @property string            $email
 * @property string|null       $role
 * @property Carbon|null       $created_at
 * @property Carbon|null       $updated_at
 * @property Team|null         $team
 * @property TeamContract|null $team
 * @method static TeamInvitationFactory  factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereUpdatedAt($value)
 * @property string      $uuid
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereUuid($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class TeamInvitation extends \Eloquent {}
}

namespace Modules\User\Models{
/**
 * Modules\User\Models\TeamUser.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser query()
 * @property int         $id
 * @property string      $uuid
 * @property string|null $team_id
 * @property string|null $user_id
 * @property string|null $role
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $customer_id
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereUuid($value)
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereDeletedBy($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class TeamUser extends \Eloquent {}
}

namespace Modules\User\Models{
/**
 * Modules\User\Models\Tenant.
 *
 * @method static \Modules\User\Database\Factories\TenantFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant   query()
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\User> $members
 * @property int|null                                                                 $members_count
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Tenant extends \Eloquent implements \Modules\User\Contracts\TenantContract, \Modules\User\Contracts\ModelContract {}
}

namespace Modules\User\Models{
/**
 * Modules\User\Models\TenantUser.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser query()
 * @property int         $id
 * @property string|null $tenant_id
 * @property string|null $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereUuid($value)
 * @property string|null $deleted_at
 * @property string|null $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|TenantUser whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TenantUser whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TenantUser whereTenantId($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class TenantUser extends \Eloquent {}
}

namespace Modules\User\Models{
/**
 * Modules\User\Models\User.
 *
 * @property Collection<int, \Modules\User\Models\OauthClient>      $clients
 * @property int|null                                               $clients_count
 * @property Team|null                                              $currentTeam
 * @property Collection<int, \Modules\User\Models\Device>           $devices
 * @property int|null                                               $devices_count
 * @property string|null                                            $full_name
 * @property DatabaseNotificationCollection<int, Notification>      $notifications
 * @property int|null                                               $notifications_count
 * @property Collection<int, \Modules\User\Models\Team>             $ownedTeams
 * @property int|null                                               $owned_teams_count
 * @property Collection<int, \Modules\User\Models\Permission>       $permissions
 * @property int|null                                               $permissions_count
 * @property \Modules\Xot\Contracts\ProfileContract|null            $profile
 * @property Collection<int, \Modules\User\Models\Role>             $roles
 * @property int|null                                               $roles_count
 * @property Collection<int, \Modules\User\Models\Team>             $teams
 * @property int|null                                               $teams_count
 * @property Collection<int, \Modules\User\Models\OauthAccessToken> $tokens
 * @property int|null                                               $tokens_count
 * @method static \Modules\User\Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User                                 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User                                 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User                                 permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User                                 query()
 * @method static \Illuminate\Database\Eloquent\Builder|User                                 role($roles, $guard = null)
 * @property string                          $id
 * @property string                          $name
 * @property string                          $first_name
 * @property string                          $last_name
 * @property string                          $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string                          $password
 * @property string|null                     $remember_token
 * @property int|null                        $current_team_id
 * @property string|null                     $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $deleted_at
 * @property string|null                     $lang
 * @property bool                            $is_active
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin Eloquent
 * @property Collection<int, \Modules\User\Models\Tenant> $tenants
 * @property int|null                                     $tenants_count
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutRole($roles, $guard = null)
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property string|null $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedBy($value)
 * @property string $surname
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSurname($value)
 * @property string|null $facebook_id
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFacebookId($value)
 * @property TenantUser $pivot
 * @property Membership $membership
 * @mixin \Eloquent
 */
	class User extends \Eloquent implements \Filament\Models\Contracts\HasName, \Filament\Models\Contracts\HasTenants, \Modules\Xot\Contracts\UserContract, \Modules\Xot\Contracts\PassportHasApiTokensContract, \Illuminate\Contracts\Auth\MustVerifyEmail, \Modules\Xot\Contracts\ModelContract, \Modules\User\Contracts\HasTeamsContract, \Filament\Models\Contracts\FilamentUser {}
}

namespace Modules\Xot\Models{
/**
 * Modules\Xot\Models\Cache.
 *
 * @property string $key
 * @property string $value
 * @property int    $expiration
 * @method static \Modules\Xot\Database\Factories\CacheFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Cache                                newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cache                                newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cache                                query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cache                                whereExpiration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cache                                whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cache                                whereValue($value)
 * @property int $expiration
 * @method static \Modules\Xot\Database\Factories\CacheFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Cache                                newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cache                                newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cache                                query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cache                                whereExpiration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cache                                whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cache                                whereValue($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Cache extends \Eloquent {}
}

namespace Modules\Xot\Models{
/**
 * Modules\Xot\Models\CacheLock.
 *
 * @property string $key
 * @property string $owner
 * @property int    $expiration
 * @method static \Modules\Xot\Database\Factories\CacheLockFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock                                newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock                                newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock                                query()
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock                                whereExpiration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock                                whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock                                whereOwner($value)
 * @property int $expiration
 * @method static \Modules\Xot\Database\Factories\CacheLockFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock                                newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock                                newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock                                query()
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock                                whereExpiration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock                                whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock                                whereOwner($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class CacheLock extends \Eloquent {}
}

namespace Modules\Xot\Models{
/**
 * Model Extra.
 *
 * @property int                                               $id
 * @property int|null                                          $model_id
 * @property string|null                                       $model_type
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes $extra_attributes
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel disableCache()
 * @method static \Modules\Xot\Database\Factories\ExtraFactory    factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Extra                                   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Extra                                   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Extra                                   query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra                                   withExtraAttributes()
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereExtraAttributes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereUpdatedBy($value)
 * @mixin \Eloquent
 */
	class Extra extends \Eloquent {}
}

namespace Modules\Xot\Models{
/**
 * Modules\Xot\Models\Feed.
 *
 * @method static \Modules\Xot\Database\Factories\FeedFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Feed                                newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed                                newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed                                query()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed                                newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed                                newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed                                query()
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Feed extends \Eloquent {}
}

namespace Modules\Xot\Models{
/**
 * 
 *
 * @property int                             $id
 * @property string                          $check_name
 * @property string                          $check_label
 * @property string                          $status
 * @property string|null                     $notification_message
 * @property string|null                     $short_summary
 * @property array                           $meta
 * @property string                          $ended_at
 * @property string                          $batch
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereBatch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereCheckLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereCheckName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereEndedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereNotificationMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereShortSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereUpdatedAt($value)
 * @property string|null $updated_by
 * @property string|null $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereUpdatedBy($value)
 * @mixin \Eloquent
 */
	class HealthCheckResultHistoryItem extends \Eloquent {}
}

namespace Modules\Xot\Models{
/**
 * Modules\Xot\Models\Feed.
 *
 * @method static \Modules\Xot\Database\Factories\FeedFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Feed                                newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed                                newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed                                query()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed                                newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed                                newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed                                query()
 * @property string|null $id
 * @property string|null $name
 * @property int|null    $size
 * @property string|null $file_content
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereSize($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Log extends \Eloquent {}
}

namespace Modules\Xot\Models{
/**
 * 
 *
 * @property int         $id
 * @property string|null $name
 * @property string|null $description
 * @property bool|null   $status
 * @property int|null    $priority
 * @property string|null $path
 * @method static \Illuminate\Database\Eloquent\Builder|Module newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module query()
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereStatus($value)
 * @mixin \Eloquent
 */
	class Module extends \Eloquent {}
}

namespace Modules\Xot\Models{
/**
 * Modules\Xot\Models\Session.
 *
 * @property int                             $id
 * @property int|null                        $user_id
 * @property string|null                     $ip_address
 * @property string|null                     $user_agent
 * @property string                          $payload
 * @property int                             $last_activity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @method static \Modules\Xot\Database\Factories\SessionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                query()
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                whereLastActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                whereUserAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                whereUserId($value)
 * @property int                             $id
 * @property int|null                        $user_id
 * @property string|null                     $ip_address
 * @property string|null                     $user_agent
 * @property string                          $payload
 * @property int                             $last_activity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @method static \Modules\Xot\Database\Factories\SessionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                query()
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                whereLastActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                whereUserAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session                                whereUserId($value)
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereDeletedBy($value)
 * @mixin \Eloquent
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 */
	class Session extends \Eloquent {}
}

