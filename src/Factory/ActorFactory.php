<?php

namespace App\Factory;

use App\Entity\Actor;
use App\Repository\ActorRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Actor>
 *
 * @method        Actor|Proxy create(array|callable $attributes = [])
 * @method static Actor|Proxy createOne(array $attributes = [])
 * @method static Actor|Proxy find(object|array|mixed $criteria)
 * @method static Actor|Proxy findOrCreate(array $attributes)
 * @method static Actor|Proxy first(string $sortedField = 'id')
 * @method static Actor|Proxy last(string $sortedField = 'id')
 * @method static Actor|Proxy random(array $attributes = [])
 * @method static Actor|Proxy randomOrCreate(array $attributes = [])
 * @method static ActorRepository|RepositoryProxy repository()
 * @method static Actor[]|Proxy[] all()
 * @method static Actor[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Actor[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Actor[]|Proxy[] findBy(array $attributes)
 * @method static Actor[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Actor[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class ActorFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'birthday' => self::faker()->dateTimeBetween('-100 years', 2018-01-01),
            'firstname' => self::faker()->firstName(),
            'lastname' => self::faker()->lastName(),
            'movieID' => self::faker()->lastName(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Actor $actor): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Actor::class;
    }
}
