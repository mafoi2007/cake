<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SchoolYears Model
 *
 * @method \App\Model\Entity\SchoolYear newEmptyEntity()
 * @method \App\Model\Entity\SchoolYear newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\SchoolYear> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SchoolYear get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\SchoolYear findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\SchoolYear patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\SchoolYear> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SchoolYear|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\SchoolYear saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\SchoolYear>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SchoolYear>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SchoolYear>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SchoolYear> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SchoolYear>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SchoolYear>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SchoolYear>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SchoolYear> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SchoolYearsTable extends Table
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

        $this->setTable('school_years');
        $this->setDisplayField('school_year_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('school_year_name')
            ->maxLength('school_year_name', 12)
            ->requirePresence('school_year_name', 'create')
            ->notEmptyString('school_year_name');

        $validator
            ->scalar('school_year_status')
            ->requirePresence('school_year_status', 'create')
            ->notEmptyString('school_year_status');

        return $validator;
    }
}
