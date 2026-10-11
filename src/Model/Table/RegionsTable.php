<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Regions Model
 *
 * @property \App\Model\Table\DepartmentsTable&\Cake\ORM\Association\HasMany $Departments
 *
 * @method \App\Model\Entity\Region newEmptyEntity()
 * @method \App\Model\Entity\Region newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Region> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Region get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Region findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Region patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Region> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Region|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Region saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Region>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Region>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Region>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Region> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Region>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Region>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Region>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Region> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RegionsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('regions');
        $this->setDisplayField('french_region_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Departments', [
            'foreignKey' => 'region_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('french_region_name')
            ->maxLength('french_region_name', 100)
            ->requirePresence('french_region_name', 'create')
            ->notEmptyString('french_region_name');

        $validator
            ->scalar('english_region_name')
            ->maxLength('english_region_name', 100)
            ->requirePresence('english_region_name', 'create')
            ->notEmptyString('english_region_name');

        return $validator;
    }
}
